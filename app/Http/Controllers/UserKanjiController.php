<?php 
namespace App\Http\Controllers;

use App\Models\Kanji;
use Illuminate\Http\Request;

class UserKanjiController extends Controller
{
    public function index(Request $request)
    {
        // Ambil level dari query parameter, default N5
        $level = $request->input('level', 'N5');
        
        // Ambil query pencarian dari input
        $query = $request->input('query');
        
        // Jika ada query pencarian, cari kanji berdasarkan kanji, kunyomi, onyomi, atau arti
        if ($query) {
            $kanjis = Kanji::where('level', $level)
                ->where(function ($queryBuilder) use ($query) {
                    $queryBuilder->where('kanji', 'like', "%$query%")
                        ->orWhere('kunyomi', 'like', "%$query%")
                        ->orWhere('onyomi', 'like', "%$query%")
                        ->orWhere('arti', 'like', "%$query%");
                })
                ->paginate(10);  // Pagination untuk hasil pencarian
        } else {
            // Jika tidak ada pencarian, hanya filter berdasarkan level
            $kanjis = Kanji::where('level', $level)->paginate(10);
        }

        return view('users.index', compact('kanjis', 'level', 'query'));
    }
}
