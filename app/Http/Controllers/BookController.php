<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class BookController extends Controller
{
    private Book $books;

    public function __construct(Book $books)
    {
        $this->books = $books;
    }
    public function index()
    {
        $books = $this->books->orderByDesc('created_at')->paginate(10);
        return view('backEnd.book.index', compact('books'));
    }

    

    public function store(BookRequest $request)
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();
            $data['slug'] = Str::slug($data['title'], "-");
            $books = $this->books->create($data);
            if (!empty($book['id'])) {
                DB::commit();
                return redirect()->route('book.index')->with('success', 'Data berhasil ditambahkan ');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', $e->getMessage());
        }
    }

    public function show(Book $book)
    {
        if (!empty($book)) {
            return response()->json([
                'status'  => true,
                'data'    => $book,
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

    public function update(BookRequest $request, Book $book)
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();
            $data['slug'] = Str::slug($data['title'], "-");
            $books = $book->update($data);
            if ($books) {
                DB::commit();
                return redirect()->route('book.index')->with('success', 'Data berhasil diupdate');
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
            $books = $this->books->whereIn("id", $request->id)->get();
            if (!empty($books)) {

                $this->books->whereIn("id", $request->id)->delete();
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
