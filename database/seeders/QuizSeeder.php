<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;

class QuizSeeder extends Seeder
{
    public function run()
    {
       

          // Membuat quiz untuk level N4
          $quizN4 = Quiz::create([
            'level' => 'N4',
            'required_score' => 75, // minimal skor untuk membuka level berikutnya
        ]);

        // Menambahkan soal untuk level N4
        $questionsN4 = [
            ['question' => 'Apa arti dari "映画"?', 'option_a' => 'Buku', 'option_b' => 'Film', 'option_c' => 'Musik', 'option_d' => 'Gambar', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "学校"?', 'option_a' => 'Rumah', 'option_b' => 'Sekolah', 'option_c' => 'Tempat kerja', 'option_d' => 'Taman', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "電話"?', 'option_a' => 'Email', 'option_b' => 'Panggilan', 'option_c' => 'Telepon', 'option_d' => 'Surat', 'correct_answer' => 'c', 'score' => 3],
       
            ['question' => 'Apa arti dari "勉強"?', 'option_a' => 'Belajar', 'option_b' => 'Tidur', 'option_c' => 'Bermain', 'option_d' => 'Makan', 'correct_answer' => 'a', 'score' => 3],
            ['question' => 'Apa arti dari "買い物"?', 'option_a' => 'Berkebun', 'option_b' => 'Mencuci', 'option_c' => 'Belanja', 'option_d' => 'Memasak', 'correct_answer' => 'c', 'score' => 3],
            ['question' => 'Apa arti dari "駅"?', 'option_a' => 'Bandara', 'option_b' => 'Stasiun', 'option_c' => 'Terminal', 'option_d' => 'Pelabuhan', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "病院"?', 'option_a' => 'Sekolah', 'option_b' => 'Rumah Sakit', 'option_c' => 'Kantor', 'option_d' => 'Toko', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "郵便局"?', 'option_a' => 'Kantor Pos', 'option_b' => 'Kantor Polisi', 'option_c' => 'Kantor Pajak', 'option_d' => 'Kantor Pemerintah', 'correct_answer' => 'a', 'score' => 3],
            ['question' => 'Apa arti dari "仕事"?', 'option_a' => 'Liburan', 'option_b' => 'Pekerjaan', 'option_c' => 'Makan', 'option_d' => 'Tidur', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "上手"?', 'option_a' => 'Pintar', 'option_b' => 'Besar', 'option_c' => 'Bagus', 'option_d' => 'Jelek', 'correct_answer' => 'a', 'score' => 3],
            ['question' => 'Apa arti dari "下手"?', 'option_a' => 'Pintar', 'option_b' => 'Tidak Pandai', 'option_c' => 'Rendah', 'option_d' => 'Besar', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "楽しい"?', 'option_a' => 'Sedih', 'option_b' => 'Menyenangkan', 'option_c' => 'Sulit', 'option_d' => 'Membosankan', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "寒い"?', 'option_a' => 'Panas', 'option_b' => 'Dingin', 'option_c' => 'Hangat', 'option_d' => 'Tenggorokan', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "暑い"?', 'option_a' => 'Panas', 'option_b' => 'Dingin', 'option_c' => 'Rendah', 'option_d' => 'Tinggi', 'correct_answer' => 'a', 'score' => 3],
            ['question' => 'Apa arti dari "遠い"?', 'option_a' => 'Dekat', 'option_b' => 'Jauh', 'option_c' => 'Tinggi', 'option_d' => 'Lebar', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "近い"?', 'option_a' => 'Dekat', 'option_b' => 'Jauh', 'option_c' => 'Rendah', 'option_d' => 'Tinggi', 'correct_answer' => 'a', 'score' => 3],
            ['question' => 'Apa arti dari "楽器"?', 'option_a' => 'Alat Musik', 'option_b' => 'Alat Makan', 'option_c' => 'Alat Tulis', 'option_d' => 'Alat Olahraga', 'correct_answer' => 'a', 'score' => 3],
            ['question' => 'Apa arti dari "空港"?', 'option_a' => 'Bandara', 'option_b' => 'Stasiun', 'option_c' => 'Pelabuhan', 'option_d' => 'Taman', 'correct_answer' => 'a', 'score' => 3],
            ['question' => 'Apa arti dari "旅行"?', 'option_a' => 'Membaca', 'option_b' => 'Belanja', 'option_c' => 'Berlibur', 'option_d' => 'Tidur', 'correct_answer' => 'c', 'score' => 3],
            ['question' => 'Apa arti dari "町"?', 'option_a' => 'Kota', 'option_b' => 'Desa', 'option_c' => 'Tempat tinggal', 'option_d' => 'Pasar', 'correct_answer' => 'a', 'score' => 3],
            ['question' => 'Apa arti dari "村"?', 'option_a' => 'Kota', 'option_b' => 'Desa', 'option_c' => 'Taman', 'option_d' => 'Tempat tinggal', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "新しい"?', 'option_a' => 'Tua', 'option_b' => 'Baru', 'option_c' => 'Cantik', 'option_d' => 'Bersih', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "楽しい"?', 'option_a' => 'Sulit', 'option_b' => 'Menyenangkan', 'option_c' => 'Menyedihkan', 'option_d' => 'Membosankan', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "一緒"?', 'option_a' => 'Bersama', 'option_b' => 'Sendirian', 'option_c' => 'Tunggu', 'option_d' => 'Tinggal', 'correct_answer' => 'a', 'score' => 3],
            ['question' => 'Apa arti dari "手紙"?', 'option_a' => 'Buku', 'option_b' => 'Surat', 'option_c' => 'Kartu Pos', 'option_d' => 'Peta', 'correct_answer' => 'b', 'score' => 3],
            ['question' => 'Apa arti dari "信号"?', 'option_a' => 'Lampu Merah', 'option_b' => 'Lonceng', 'option_c' => 'Tanda', 'option_d' => 'Kekuatan', 'correct_answer' => 'c', 'score' => 3],
        ];
        foreach ($questionsN4 as $question) {
    $quizN4->questions()->create($question);
}

     

            // Membuat quiz untuk level N4
            $quizN3 = Quiz::create([
                'level' => 'N3',
                'required_score' => 75, // minimal skor untuk membuka level berikutnya
            ]);
            // Menambahkan soal untuk level N3
$questionsN3 = [
    ['question' => 'Apa arti dari "挑戦"?', 'option_a' => 'Tantangan', 'option_b' => 'Keberuntungan', 'option_c' => 'Rencana', 'option_d' => 'Perjuangan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "指示"?', 'option_a' => 'Instruksi', 'option_b' => 'Penyakit', 'option_c' => 'Alat', 'option_d' => 'Pertanyaan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "改革"?', 'option_a' => 'Reformasi', 'option_b' => 'Perubahan', 'option_c' => 'Pemberontakan', 'option_d' => 'Penyelesaian', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "同情"?', 'option_a' => 'Perhatian', 'option_b' => 'Simpati', 'option_c' => 'Benci', 'option_d' => 'Ketidakpedulian', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "観察"?', 'option_a' => 'Men-*dengarkan', 'option_b' => 'Mengamati', 'option_c' => 'Melihat', 'option_d' => 'Menulis', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "状況"?', 'option_a' => 'Keadaan', 'option_b' => 'Tujuan', 'option_c' => 'Kesulitan', 'option_d' => 'Solusi', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "手続き"?', 'option_a' => 'Langkah-langkah', 'option_b' => 'Prosedur', 'option_c' => 'Bantuan', 'option_d' => 'Perintah', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "意欲"?', 'option_a' => 'Keinginan', 'option_b' => 'Rasa Malu', 'option_c' => 'Ketertarikan', 'option_d' => 'Kekecewaan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "専攻"?', 'option_a' => 'Minat', 'option_b' => 'Jurusan', 'option_c' => 'Cita-cita', 'option_d' => 'Pekerjaan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "予想"?', 'option_a' => 'Perkiraan', 'option_b' => 'Rencana', 'option_c' => 'Tebakan', 'option_d' => 'Kesimpulan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "提供"?', 'option_a' => 'Penawaran', 'option_b' => 'Permintaan', 'option_c' => 'Penyediaan', 'option_d' => 'Pemberian', 'correct_answer' => 'c', 'score' => 3],
    ['question' => 'Apa arti dari "誤解"?', 'option_a' => 'Pemahaman', 'option_b' => 'Kesalahan', 'option_c' => 'Kebingungan', 'option_d' => 'Pengetahuan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "義務"?', 'option_a' => 'Kewajiban', 'option_b' => 'Keinginan', 'option_c' => 'Kesempatan', 'option_d' => 'Keputusan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "得意"?', 'option_a' => 'Terampil', 'option_b' => 'Kesulitan', 'option_c' => 'Menyenankan', 'option_d' => 'Menyesal', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "普通"?', 'option_a' => 'Luar biasa', 'option_b' => 'Biasa', 'option_c' => 'Rendah', 'option_d' => 'Canggih', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "反省"?', 'option_a' => 'Penyesalan', 'option_b' => 'Evaluasi diri', 'option_c' => 'Pengampunan', 'option_d' => 'Perubahan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "設備"?', 'option_a' => 'Peralatan', 'option_b' => 'Perbaikan', 'option_c' => 'Pekerjaan', 'option_d' => 'Layanan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "研究"?', 'option_a' => 'Penelitian', 'option_b' => 'Pendidikan', 'option_c' => 'Pengetahuan', 'option_d' => 'Pembelajaran', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "予算"?', 'option_a' => 'Anggaran', 'option_b' => 'Pendapatan', 'option_c' => 'Pengeluaran', 'option_d' => 'Laba', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "改善"?', 'option_a' => 'Perbaikan', 'option_b' => 'Peningkatan', 'option_c' => 'Pengurangan', 'option_d' => 'Penyelesaian', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "流行"?', 'option_a' => 'Penularan', 'option_b' => 'Populer', 'option_c' => 'Berjalan', 'option_d' => 'Melakukan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "発表"?', 'option_a' => 'Pernyataan', 'option_b' => 'Laporan', 'option_c' => 'Presentasi', 'option_d' => 'Penutupan', 'correct_answer' => 'c', 'score' => 3],
    ['question' => 'Apa arti dari "品質"?', 'option_a' => 'Harga', 'option_b' => 'Kualitas', 'option_c' => 'Jumlah', 'option_d' => 'Cita rasa', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "担当"?', 'option_a' => 'Pengawasan', 'option_b' => 'Tanggung jawab', 'option_c' => 'Keputusan', 'option_d' => 'Laporan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "確認"?', 'option_a' => 'Verifikasi', 'option_b' => 'Keputusan', 'option_c' => 'Penyelesaian', 'option_d' => 'Rekaman', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "貿易"?', 'option_a' => 'Perdagangan', 'option_b' => 'Industri', 'option_c' => 'Ekspor', 'option_d' => 'Impor', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "貸す"?', 'option_a' => 'Meminjamkan', 'option_b' => 'Meminjam', 'option_c' => 'Membeli', 'option_d' => 'Menjual', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "納得"?', 'option_a' => 'Penerimaan', 'option_b' => 'Pemahaman', 'option_c' => 'Keberhasilan', 'option_d' => 'Pengakuan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "補助"?', 'option_a' => 'Bantuan', 'option_b' => 'Penyelesaian', 'option_c' => 'Pengurangan', 'option_d' => 'Pendapatan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "学習"?', 'option_a' => 'Pembelajaran', 'option_b' => 'Pendidikan', 'option_c' => 'Pengetahuan', 'option_d' => 'Materi', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "支援"?', 'option_a' => 'Bantuan', 'option_b' => 'Pemberian', 'option_c' => 'Dukungan', 'option_d' => 'Perubahan', 'correct_answer' => 'c', 'score' => 3],
    ['question' => 'Apa arti dari "内容"?', 'option_a' => 'Tujuan', 'option_b' => 'Isi', 'option_c' => 'Ringkasan', 'option_d' => 'Keputusan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "製品"?', 'option_a' => 'Produk', 'option_b' => 'Pembuatan', 'option_c' => 'Kualitas', 'option_d' => 'Bahan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "生産"?', 'option_a' => 'Produksi', 'option_b' => 'Penyelesaian', 'option_c' => 'Pemeliharaan', 'option_d' => 'Pertumbuhan', 'correct_answer' => 'a', 'score' => 3]
];
foreach ($questionsN3 as $question) {
    $quizN3->questions()->create($question);
}
    
            // Membuat quiz untuk level N2
$quizN2 = Quiz::create([
    'level' => 'N2',
    'required_score' => 75, // minimal skor untuk membuka level berikutnya
]);

// Menambahkan soal untuk level N2
$questionsN2 = [
    ['question' => 'Apa arti dari "進捗"?', 'option_a' => 'Kemajuan', 'option_b' => 'Kesulitan', 'option_c' => 'Kebuntuan', 'option_d' => 'Penundaan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "顧客"?', 'option_a' => 'Rekan', 'option_b' => 'Pelanggan', 'option_c' => 'Atasan', 'option_d' => 'Karyawan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "戦略"?', 'option_a' => 'Taktik', 'option_b' => 'Strategi', 'option_c' => 'Rencana', 'option_d' => 'Tujuan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "改革"?', 'option_a' => 'Reformasi', 'option_b' => 'Kebijakan', 'option_c' => 'Keputusan', 'option_d' => 'Solusi', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "優先"?', 'option_a' => 'Prioritas', 'option_b' => 'Pembatalan', 'option_c' => 'Pengunduran', 'option_d' => 'Penundaan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "確認"?', 'option_a' => 'Verifikasi', 'option_b' => 'Pertanyaan', 'option_c' => 'Laporan', 'option_d' => 'Konsultasi', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "解決"?', 'option_a' => 'Penyelesaian', 'option_b' => 'Masalah', 'option_c' => 'Hambatan', 'option_d' => 'Solusi', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "不明"?', 'option_a' => 'Tidak jelas', 'option_b' => 'Terbuka', 'option_c' => 'Tersedia', 'option_d' => 'Diketahui', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "結果"?', 'option_a' => 'Hasil', 'option_b' => 'Tujuan', 'option_c' => 'Pencapaian', 'option_d' => 'Kegiatan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "効果"?', 'option_a' => 'Pengaruh', 'option_b' => 'Efek', 'option_c' => 'Tujuan', 'option_d' => 'Hasil', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "提案"?', 'option_a' => 'Saran', 'option_b' => 'Penyelesaian', 'option_c' => 'Masalah', 'option_d' => 'Ide', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "障害"?', 'option_a' => 'Beban', 'option_b' => 'Masalah', 'option_c' => 'Kesulitan', 'option_d' => 'Hambatan', 'correct_answer' => 'd', 'score' => 3],
    ['question' => 'Apa arti dari "特徴"?', 'option_a' => 'Ciri khas', 'option_b' => 'Kekurangan', 'option_c' => 'Kelebihan', 'option_d' => 'Kekuatan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "機会"?', 'option_a' => 'Kesempatan', 'option_b' => 'Perjalanan', 'option_c' => 'Tempat', 'option_d' => 'Pertemuan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "作業"?', 'option_a' => 'Pekerjaan', 'option_b' => 'Proses', 'option_c' => 'Tugas', 'option_d' => 'Langkah', 'correct_answer' => 'c', 'score' => 3],
    ['question' => 'Apa arti dari "意欲"?', 'option_a' => 'Keinginan', 'option_b' => 'Kehendak', 'option_c' => 'Rencana', 'option_d' => 'Motivasi', 'correct_answer' => 'd', 'score' => 3],
    ['question' => 'Apa arti dari "達成"?', 'option_a' => 'Pencapaian', 'option_b' => 'Rencana', 'option_c' => 'Sukses', 'option_d' => 'Usaha', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "動作"?', 'option_a' => 'Tindakan', 'option_b' => 'Pergerakan', 'option_c' => 'Prosedur', 'option_d' => 'Tujuan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "過程"?', 'option_a' => 'Proses', 'option_b' => 'Tugas', 'option_c' => 'Langkah', 'option_d' => 'Perjalanan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "処理"?', 'option_a' => 'Penyelesaian', 'option_b' => 'Pemrosesan', 'option_c' => 'Keterangan', 'option_d' => 'Tindakan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "調整"?', 'option_a' => 'Penyesuaian', 'option_b' => 'Penutupan', 'option_c' => 'Perubahan', 'option_d' => 'Pembukaan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "前提"?', 'option_a' => 'Ketentuan', 'option_b' => 'Asumsi', 'option_c' => 'Persyaratan', 'option_d' => 'Keputusan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "時期"?', 'option_a' => 'Tingkat', 'option_b' => 'Waktu', 'option_c' => 'Tanggal', 'option_d' => 'Periode', 'correct_answer' => 'd', 'score' => 3],
    ['question' => 'Apa arti dari "複雑"?', 'option_a' => 'Rumit', 'option_b' => 'Sederhana', 'option_c' => 'Panjang', 'option_d' => 'Cepat', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "対策"?', 'option_a' => 'Strategi', 'option_b' => 'Langkah', 'option_c' => 'Solusi', 'option_d' => 'Tindakan', 'correct_answer' => 'd', 'score' => 3],
    ['question' => 'Apa arti dari "方針"?', 'option_a' => 'Tujuan', 'option_b' => 'Pendekatan', 'option_c' => 'Rencana', 'option_d' => 'Pendapat', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "一部"?', 'option_a' => 'Satu bagian', 'option_b' => 'Buku pertama', 'option_c' => 'Besar', 'option_d' => 'Satu', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "調査"?', 'option_a' => 'Penelitian', 'option_b' => 'Perbaikan', 'option_c' => 'Tindakan', 'option_d' => 'Pemeriksaan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "合意"?', 'option_a' => 'Persetujuan', 'option_b' => 'Penolakan', 'option_c' => 'Penerimaan', 'option_d' => 'Pertentangan', 'correct_answer' => 'a', 'score' => 3],
    // Tambahan soal baru untuk N

        ];

        foreach ($questionsN2 as $question) {
            $quizN2->questions()->create($question);
        }

      // Membuat quiz untuk level N1
$quizN1 = Quiz::create([
    'level' => 'N1',
    'required_score' => 75, // minimal skor untuk membuka level berikutnya
]);

// Menambahkan soal untuk level N1
$questionsN1 = [
    ['question' => 'Apa arti dari "潜在"?', 'option_a' => 'Tersembunyi', 'option_b' => 'Menonjol', 'option_c' => 'Terlihat', 'option_d' => 'Terbuka', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "断言"?', 'option_a' => 'Pernyataan', 'option_b' => 'Pengingkaran', 'option_c' => 'Pembuktian', 'option_d' => 'Tanya jawab', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "崩壊"?', 'option_a' => 'Kebangkitan', 'option_b' => 'Kehancuran', 'option_c' => 'Penyelamatan', 'option_d' => 'Keberhasilan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "反映"?', 'option_a' => 'Refleksi', 'option_b' => 'Pengaruh', 'option_c' => 'Penyelidikan', 'option_d' => 'Kritik', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "兆候"?', 'option_a' => 'Tanda-tanda', 'option_b' => 'Keberuntungan', 'option_c' => 'Pertanda', 'option_d' => 'Pertanyaan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "切実"?', 'option_a' => 'Sederhana', 'option_b' => 'Penting', 'option_c' => 'Serius', 'option_d' => 'Mendesak', 'correct_answer' => 'c', 'score' => 3],
    ['question' => 'Apa arti dari "過剰"?', 'option_a' => 'Berlebihan', 'option_b' => 'Tepat', 'option_c' => 'Kurang', 'option_d' => 'Penuh', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "定着"?', 'option_a' => 'Penyelesaian', 'option_b' => 'Penetapan', 'option_c' => 'Perubahan', 'option_d' => 'Kebiasaan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "言い換え"?', 'option_a' => 'Penerjemahan', 'option_b' => 'Perubahan kata', 'option_c' => 'Pernyataan', 'option_d' => 'Penekanan', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "未熟"?', 'option_a' => 'Kekurangan', 'option_b' => 'Kematangan', 'option_c' => 'Keterampilan', 'option_d' => 'Ketidaksiapan', 'correct_answer' => 'd', 'score' => 3],
    ['question' => 'Apa arti dari "多様"?', 'option_a' => 'Berganti', 'option_b' => 'Beragam', 'option_c' => 'Bergabung', 'option_d' => 'Terbatas', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "圧倒的"?', 'option_a' => 'Mengalahkan', 'option_b' => 'Memukau', 'option_c' => 'Menyusul', 'option_d' => 'Mencapai', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "誤解"?', 'option_a' => 'Salah paham', 'option_b' => 'Penerimaan', 'option_c' => 'Kecemasan', 'option_d' => 'Kebingungan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "相違"?', 'option_a' => 'Kesalahan', 'option_b' => 'Perbedaan', 'option_c' => 'Keunikan', 'option_d' => 'Kesesuaian', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "徹底"?', 'option_a' => 'Menyerah', 'option_b' => 'Keseluruhan', 'option_c' => 'Keterbukaan', 'option_d' => 'Penyelesaian', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "模範"?', 'option_a' => 'Contoh', 'option_b' => 'Peringatan', 'option_c' => 'Pembuktian', 'option_d' => 'Pertanyaan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "計略"?', 'option_a' => 'Kebijakan', 'option_b' => 'Rencana', 'option_c' => 'Taktik', 'option_d' => 'Tujuan', 'correct_answer' => 'c', 'score' => 3],
    ['question' => 'Apa arti dari "察知"?', 'option_a' => 'Peringatan', 'option_b' => 'Kesadaran', 'option_c' => 'Pengamatan', 'option_d' => 'Perhatian', 'correct_answer' => 'c', 'score' => 3],
    ['question' => 'Apa arti dari "特異"?', 'option_a' => 'Biasa', 'option_b' => 'Unik', 'option_c' => 'Terbatas', 'option_d' => 'Umum', 'correct_answer' => 'b', 'score' => 3],
    ['question' => 'Apa arti dari "煩雑"?', 'option_a' => 'Rapi', 'option_b' => 'Mudah', 'option_c' => 'Sederhana', 'option_d' => 'Rumit', 'correct_answer' => 'd', 'score' => 3],
    ['question' => 'Apa arti dari "劣位"?', 'option_a' => 'Posisi lebih rendah', 'option_b' => 'Keunggulan', 'option_c' => 'Kemenangan', 'option_d' => 'Kekalahan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "鋭敏"?', 'option_a' => 'Tajam', 'option_b' => 'Lemah', 'option_c' => 'Tulus', 'option_d' => 'Lambat', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "優越"?', 'option_a' => 'Keunggulan', 'option_b' => 'Kekalahan', 'option_c' => 'Kemerosotan', 'option_d' => 'Kesederhanaan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "足掻く"?', 'option_a' => 'Melompat', 'option_b' => 'Bertindak', 'option_c' => 'Berjuang', 'option_d' => 'Beristirahat', 'correct_answer' => 'c', 'score' => 3],
    ['question' => 'Apa arti dari "放任"?', 'option_a' => 'Mengabaikan', 'option_b' => 'Memelihara', 'option_c' => 'Mengizinkan', 'option_d' => 'Menyalahkan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "従事"?', 'option_a' => 'Bekerja', 'option_b' => 'Berhubungan', 'option_c' => 'Beristirahat', 'option_d' => 'Mengundurkan', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "繁忙"?', 'option_a' => 'Kesibukan', 'option_b' => 'Kelapangan', 'option_c' => 'Ketenangan', 'option_d' => 'Sampai', 'correct_answer' => 'a', 'score' => 3],
    ['question' => 'Apa arti dari "抜群"?', 'option_a' => 'Terbaik', 'option_b' => 'Buruk', 'option_c' => 'Cukup', 'option_d' => 'Buruk', 'correct_answer' => 'a', 'score' => 3],
    // Tambahan soal baru

        ];
        foreach ($questionsN1 as $question) {
            $quizN1->questions()->create($question);
        }
        }
    
}
