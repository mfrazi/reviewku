<?php

use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            [
                'name' => 'G / Semua Umur',
                'description' => 'Semua Usia diperkenankan menonton. Sebuah film dengan rating "G" tidak berisi apapun mengenai tema, bahasa, ketelanjangan, seks, kekerasan atau hal lain yang akan menyinggung perasaan orang tua yang anak-anak muda melihat film. Rating "G" bukan merupakan "persetujuan," juga bukan menandakan sebuah film "anak-anak". Beberapa cuplikan bahasa mungkin melampaui percakapan sopan tetapi itu adalah ekspresi sehari-hari biasa. Tidak ada kata-kata "berlebihan" yang muncul dalam film "G". Penggambaran kekerasan yang minimal. Tidak ada adegan seks telanjang, atau penggunaan narkoba yang muncul dalam film.'
            ],
            [
                'name' => 'PG / Anak 4-7 tahun',
                'description' => 'Beberapa isi dari film Mungkin Tidak Cocok Untuk Anak-anak. Sebuah film berating "PG" harus diselidiki dahulu oleh orang tua sebelum membiarkan anak mereka menontonnya. Peringkat PG menunjukkan, dalam pandangan MPA, bahwa orang tua dapat mempertimbangkan beberapa konten tidak sesuai untuk anak-anak, dan orang tua harus membuat keputusan terkait hal itu. Tema yang lebih dewasa dalam beberapa film "PG" mungkin membutuhkan bimbingan orang tua. Mungkin ada beberapa kata-kata "kotor" dan beberapa penggambaran kekerasan atau ketelanjangan secara singkat. Namun elemen ini tidak dianggap begitu kuat untuk mensyaratkan bahwa orang tua harus sangat berhati-hati. Tidak ada tontonan penggunaan narkoba dalam film berating "PG".'
            ],
            [
                'name' => 'PG-13 / Anak 5-12 tahun',
                'description' => 'Beberapa isi dalam film Mungkin tidak pantas untuk tontonan bagi Anak-Anak Dibawah umur 13. Rating "PG-13" adalah peringatan tegas dari MPA bagi orang tua untuk menentukan apakah anak-anak di bawah usia 13 tahun dapat menonton film, dengan pertimbangan adanya beberapa isi film mungkin tidak cocok untuk mereka. Film dengan rating "PG-13" penuh tema kekerasan, ketelanjangan, sensualitas, bahasa, kegiatan orang dewasa atau unsur-unsur lain, tetapi tidak sampai mencapai kategori "R". Tema film dengan sendirinya tidak akan menghasilkan peringkat yang lebih besar dari "PG-13", walaupun penggambaran kegiatan yang berkaitan dengan tema dewasa dapat mengakibatkan peringkat dibatasi untuk film bersangkutan. Adegan penggunaan narkoba akan membutuhkan setidaknya rating "PG-13". Adegan telanjang yang lama, membutuhkan setidaknya rating "PG-13", namun adegan telanjang tersebut dalam rating ini dinilai umumnya tidak akan berorientasi seksual. Ada kemungkinan penggambaran kekerasan di film "PG-13", namun umumnya tidak realistis dan ekstrim.'
            ],
            [
                'name' => 'R / Remaja 13-16 tahun',
                'description' => 'Anak-anak bawah usia 17 tahun diharuskan didampingi Orang Tua atau orang yang lebih Dewasa. Sebuah film dengan rating "R", berisi beberapa materi dewasa. Sebuah film "R" mungkin mencakup tema-tema orang dewasa, aktivitas orang dewasa, bahasa yang kasar, kekerasan yang ekstrim atau berkelanjutan (lebih dari sekali), ketelanjangan berorientasi seksual, penyalahgunaan obat-obatan atau unsur-unsur lainnya, sehingga orangtua harus menaruh perhatian sangat serius. Anak di bawah 17 tahun tidak diizinkan untuk menonton film berating "R" tanpa ditemani oleh orang tua atau orang yang lebih dewasa. Orang tua sangat disarankan untuk mengetahui lebih banyak tentang film berating "R" agar dapat menentukan kesesuaian film tersebut untuk anak-anaknya.'
            ],
            [
                'name' => 'NC-17 / Dewasa',
                'description' => 'Sebuah film dengan rating "NC-17" adalah salah satu yang dalam pandangan MPA, kebanyakan orangtua akan mempertimbangkan isi film yang terlalu dewasa untuk anak-anak anda yang berusia 17 dan di bawahnya. Anak-anak tidak diperbolehkan menontonnya. "NC-17" tidak berarti "cabul" atau "pornografi" dalam arti biasa, dan tidak dapat dianggap sebagai penilaian negatif dalam arti apapun. Peringkat tersebut hanya sinyal bahwa konten film hanya cocok untuk audiens dewasa. Film berating "NC-17" dapat didasarkan pada kekerasan, seks, perilaku menyimpang, penyalahgunaan obat-obatan atau elemen lain yang kebanyakan orangtua akan mempertimbangkan terlalu kerasnya serta melewati batas kelayakan untuk dilihat oleh anak-anak.  '
            ]
        ]);
    }
}
