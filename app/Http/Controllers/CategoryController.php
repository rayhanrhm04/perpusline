<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private Category $categories;

    public function __construct(Category $categories)
    {
       $this->categories = $categories;
    }

    public function index()
    {
        $categories = $this->categories->orderByDesc('created_at')->paginate(10);
        return view('backEnd.category.index', compact('categories'));
    }

    public function store(CategoryRequest $request){
        DB::beginTransaction();

        try {
            $data = $request->validated();
            $data['slug'] = Str::slug($data['title'], "-");
            $categories = $this->categories->create($data);
            if (!empty($categories['id'])) {
                DB::commit();
                return redirect()->route('category.index')->with('success', 'Data berhasil ditambahkan ');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', $e->getMessage());
        }
    }

    public function show(Category $category)
    {
        if (!empty($category)) {
            return response()->json([
                'status'  => true,
                'data'    => $category,
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

    public function update(CategoryRequest $request, Category $category)
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();
            $data['slug'] = Str::slug($data['title'], "-");
            $categories = $category->update($data);
            if ($categories) {
                DB::commit();
                return redirect()->route('category.index')->with('success', 'Data berhasil diupdate');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Request $request){
        DB::beginTransaction();
        try {
            $categories = $this->categories->whereIn("id", $request->id)->get();
            if (!empty($categories)) {

                $this->categories->whereIn("id", $request->id)->delete();
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
