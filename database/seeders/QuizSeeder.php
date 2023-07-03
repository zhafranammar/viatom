<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::Create([
            'title' => 'Quiz 1',
            'question' => 'Siapa ilmuwan yang mengemukakan teori atom Dalton?',
            'level' => 5,
            'option_true' => 'John Dalton',
            'option_false_1' => 'Albert Einstein',
            'option_false_2' => 'Joseph John Thomson',
            'option_false_3' => 'Niels Bohr',
            'explanation' => 'Teori atom Dalton dikembangkan oleh John Dalton pada tahun 1803 hingga 1809.',
        ]);

        Quiz::create([
            'title' => 'Quiz 2',
            'question' => 'Teori atom Dalton menyatakan bahwa atom merupakan partikel terkecil yang memiliki karakteristik yaitu?',
            'level' => 6,
            'option_true' => 'Tidak dapat dibagi menjadi subatom',
            'option_false_1' => 'Dapat terbagi menjadi subatom',
            'option_false_2' => 'Hanya terdiri dari elektron',
            'option_false_3' => 'Terdiri dari partikel subatom lainnya',
            'explanation' => 'Teori atom Dalton menyatakan bahwa atom tidak dapat dibagi menjadi subatom.',
        ]);

        Quiz::create([
            'title' => 'Quiz 3',
            'question' => 'Berdasarkan Teori Thomson, apa yang merupakan struktur dasar atom?',
            'level' => 11,
            'option_true' => 'Elektron',
            'option_false_1' => 'Proton',
            'option_false_2' => 'Neutron',
            'option_false_3' => 'Inti atom',
            'explanation' => 'Struktur dasar atom menurut Thomson adalah elektron.',
        ]);

        Quiz::create([
            'title' => 'Quiz 4',
            'question' => 'Maksud dari penggambaran model atom sebagai "Roti kismis" pada teori atom Thomson adalah...',
            'level' => 12,
            'option_true' => 'Atom terdiri atas materi bermuatan positif dan di dalamnya tersebar elektron',
            'option_false_1' => 'Atom berbentuk bola pejal padat yang tidak dapat dipecahkan',
            'option_false_2' => 'Atom hanya terdiri dari proton yang mengelilingi inti atom',
            'option_false_3' => 'Atom terdiri dari proton, elektron, dan neutron yang saling bersilangan',
            'explanation' => 'Atom terdiri atas materi bermuatan positif dan di dalamnya tersebar elektron bagaikan kismis dalam roti kismis. Karena muatan positif dan negatif bercampur jadi satu dengan jumlah yang sama, maka secara keseluruhan atom menurut Thompson bersifat netral.',
        ]);

        Quiz::create([
            'title' => 'Quiz 5',
            'question' => 'Siapakah yang mengusulkan nama partikel sinar katoda disebut "elektron"?',
            'level' => 19,
            'option_true' => 'George Johnstone Stoney',
            'option_false_1' => 'William Crookes',
            'option_false_2' => 'John Dalton',
            'option_false_3' => 'Louis de Broglie',
            'explanation' => 'Elektron adalah partikel subatom yang bermuatan negatif. Nama elektron diperkenalkan untuk menamakan muatan ini pada tahun 1894 oleh fisikawan Irlandia George Johnstone Stoney.',
        ]);
        Quiz::Create([
            'title' => 'Quiz 6',
            'question' => '2.Percobaan yang mendasari adanya penemuan muatan dan massa elektron adalah…',
            'level' => 20,
            'option_true' => 'Percobaan Tetes Minyak Milikan',
            'option_false_1' => 'Percobaan Tabung Sinar Katode',
            'option_false_2' => 'Percobaan Hamburan Partikel Alfa',
            'option_false_3' => 'Percobaan Geiger Muller',
            'explanation' => 'Percobaan Tetes Minyak Milikan dilakukan untuk menemukan muatan satu electron oleh seorang ilmuan bernama Robert Andrews Milikan',
        ]);
        Quiz::Create([
            'title' => 'Quiz 7',
            'question' => 'Eksperimen yang dilakukan oleh Rutherford untuk mengembangkan teorinya tentang struktur atom adalah…',
            'level' => 28,
            'option_true' => 'Eksperimen hamburan partikel alfa',
            'option_false_1' => 'Eksperimen sinar katode',
            'option_false_2' => 'Eksperimen sinar-X',
            'option_false_3' => 'Eksperimen elektrolisis',
            'explanation' => 'Eksperimen hamburan partikel alfa. Hasil percobaan ini membuat Rutherford menyatakan hipotesisnya bahwa atom tersusun dari inti atom yang bermuatan positif dan dikelilingi elektron yang bermuatan negatif, sehingga atom bersifat netral.',
        ]);
        Quiz::Create([
            'title' => 'Quiz 8',
            'question' => 'Apa yang menyebabkan partikel alfa sedikit yang dibelokkan menurut teori Rutherford?',
            'level' => 29,
            'option_true' => 'Partikel alfa ditolak inti atom yang bermuatan positif',
            'option_false_1' => 'Inti atom menarik partikel alfa',
            'option_false_2' => 'Partikel alfa mengalami tumbukan dengan partikel beta di dalam atom',
            'option_false_3' => 'Elektron di dalam atom menarik partikel alfa',
            'explanation' => 'Partikel alfa yang bermuatan positif sedikit yang dibelokkan karena ditolak inti atom yang bermuatan positif',
        ]);
        Quiz::Create([
            'title' => 'Quiz 9',
            'question' => 'Siapakah ilmuwan yang mengusulkan model atom Bohr ?',
            'level' => 34,
            'option_true' => 'Niels Bohr',
            'option_false_1' => 'Ernest Rutherford',
            'option_false_2' => 'John Dalton',
            'option_false_3' => 'Joseph John Thomson',
            'explanation' => 'Niels Bohr adalah seorang fisikawan Denmark yang mengusulkan model atom pada tahun 1913.',
        ]);
        Quiz::Create([
            'title' => 'Quiz 10',
            'question' => 'Menurut model atom Bohr, perubahan energi elektron dalam atom terjadi ketika…',
            'level' => 35,
            'option_true' => 'Elektron memancarkan cahaya',
            'option_false_1' => 'Elektron bertabrakan dengan partikel lain',
            'option_false_2' => 'Elektron mendapatkan energi kinetik tambahan',
            'option_false_3' => 'Elektron bergerak menuju inti atom',
            'explanation' => 'Menurut model atom Bohr, perubahan energi elektron dalam atom terjadi ketika elektron memancarkan cahaya.',
        ]);
        Quiz::Create([
            'title' => 'Quiz 11',
            'question' => 'Diketahui atom magnesium (Mg) memiliki nomor massa 24 dan nomor atom 12. Berapa jumlah proton, elektron, dan neutron berturut-turut dalam atom tersebut?',
            'level' => 38,
            'option_true' => '12 ; 12 ; 12',
            'option_false_1' => '12 ; 24 ; 12',
            'option_false_2' => '12 ; 12 ; 24',
            'option_false_3' => '12 ; 10 ; 12',
            'explanation' => 'Jumlah proton = nomor atom = 12
            Jumlah elektron = jumlah proton = 12
            Jumlah neutron = nomor massa - nomor atom = 24 - 12 = 12',
        ]);
        Quiz::Create([
            'title' => 'Quiz 12',
            'question' => 'Berapa jumlah proton, elektron, dan neutron berturut-turut pada ion oksigen dengan muatan -2 (O2-)? (No atom O = 8 ; No massa = 18)',
            'level' => 39,
            'option_true' => '8 ; 10 ; 10',
            'option_false_1' => '10 ; 10 ; 8',
            'option_false_2' => '8 ; 10 ; 8',
            'option_false_3' => '10 ; 8 ; 8',
            'explanation' => 'Jumlah proton = nomor atom = 8
            Jumlah elektron = jumlah proton + muatan = 8 + 2 = 10
            Jumlah neutron = nomor massa - nomor atom = 18 - 8 = 10',
        ]);
        Quiz::Create([
            'title' => 'Quiz 13',
            'question' => 'Diketahui Atom X memiliki nomor massa 20 dan nomor atom 9. Atom Y memiliki nomor massa 19 dan nomor atom 9. Atom Z memiliki nomor massa 20 dan nomor atom 10. Berdasarkan informasi tersebut, manakah pilihan yang benar?',
            'level' => 42,
            'option_true' => 'Atom X dan Y merupakan isotop',
            'option_false_1' => 'Atom Y dan Z adalah isotop',
            'option_false_2' => 'Atom X dan Y adalah isoton',
            'option_false_3' => 'Atom Y dan Z adalah isobar',
            'explanation' => 'Isotop adalah atom yang memiliki nomor atom sama tetapi nomor massa berbeda. Atom X dan Y memiliki nomor atom yang sama tetapi nomor massa berbeda, sehingga atom X dan Y merupakan isotop.',

        ]);
        Quiz::Create([
            'title' => 'Quiz 14',
            'question' => 'Seorang ahli kimia sedang mengamati dua jenis inti atom berbeda yang memiliki jumlah proton yang sama namun jumlah neutron yang berbeda. Ia menyimpulkan bahwa inti-inti atom ini termasuk dalam kategori…',
            'level' => 43,
            'option_true' => 'Isotop',
            'option_false_1' => 'Isoton',
            'option_false_2' => 'Isobar',
            'option_false_3' => 'Isomer',
            'explanation' => 'Isotop adalah atom yang memiliki nomor atom sama tetapi nomor massa berbeda. Atom X dan Y memiliki nomor atom yang sama tetapi nomor massa berbeda, sehingga atom X dan Y merupakan isotop.',
        ]);
    }
}
