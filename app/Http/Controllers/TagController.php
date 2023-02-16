<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{

    private Tag $tags;

    public function __construct(Tag $tags)
    {
        $this->tags = $tags;
    }
    public function index()
    {
        $tags = $this->tags->orderByDesc('created_at')->paginate(10);
        return view('backEnd.tag.index', compact('tags'));
    }
    public function store(TagRequest $request)
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();
            $data['slug'] = Str::slug($data['title'], "-");
            $tags = $this->tags->create($data);
            if (!empty($tags['id'])) {
                DB::commit();
                return redirect()->route('tag.index')->with('success', 'Data berhasil ditambahkan ');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', $e->getMessage());
        }
    }
    public function show(Tag $tag)
    {
        if (!empty($tag)) {
            return response()->json([
                'status'  => true,
                'data'    => $tag,
                'message' => 'Data berhasil diambil.',
            ]);
        } else {
            return response()->json([
                'message' => 'Data Tidak Ada.',
                'data'    => [],
                'roles'   => [],
                'status' => false,
            ]);

        }
    }

    public function update(TagRequest $request, Tag $tag)
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();
            $data['slug'] = Str::slug($data['title'], "-");
            $tags = $tag->update($data);
            if ($tags) {
                DB::commit();
                return redirect()->route('tag.index')->with('success', 'Data berhasil diupdate');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Request $request)
    {
        DB::beginTransaction();
        try {
            $tags = $this->tags->whereIn("id", $request->id)->get();
            if (!empty($tags)) {

                $this->tags->whereIn("id", $request->id)->delete();
                DB::commit();
                return response()->json([
                    'message' => 'Data berhasil dihapus.',
                    'status' => true,
                ]);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Data Gagal Di hapus.',
                'status' => false,
            ]);
        }
    }
}
