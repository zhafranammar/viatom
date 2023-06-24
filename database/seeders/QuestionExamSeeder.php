<?php

namespace Database\Seeders;

use App\Models\QuestionExam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionExamSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    QuestionExam::create([
      'question' => 'Manakah model atom menurut teori atom Thomson ?',
      'question_image' => 'assets/exam/1.png',
      'option_true' => '2',
      'option_false_1' => '1',
      'option_false_2' => '3',
      'option_false_3' => '4',
    ]);
    QuestionExam::create([
      'question' => 'Menurut teori atom Dalton, atom dari unsur yang berbeda memiliki karakteristik yaitu?',
      'option_true' => 'Massa, struktur, dan ukuran yang berbeda.',
      'option_false_1' => 'Massa yang sama.',
      'option_false_2' => 'Struktur yang sama.',
      'option_false_3' => 'Ukuran yang sama.',
    ]);
    QuestionExam::create([
      'question' => 'Pokok teori atom Thomson dititikberatkan pada…',
      'option_true' => 'Atom sebagai bola masif bermuatan positif yang di dalamnya tersebar elektron sehingga keseluruhannya bersifat netral.',
      'option_false_1' => 'Atom terdiri dari elektron - elektron.',
      'option_false_2' => 'Atom sebagai bola masif yang hanya berisi elektron.',
      'option_false_3' => 'Proton dan elektron adalah bagian penyusun atom yang keduanya saling meniadakan.',
    ]);

    QuestionExam::create([
      'question' => 'Bagaimana J.J. Thomson dapat menemukan elektron (partikel bermuatan negatif) ?',
      'option_true' => 'Melalui eksperimen sinar katode.',
      'option_false_1' => 'Melalui eksperimen sinar-X.',
      'option_false_2' => 'Melalui eksperimen hamburan partikel alfa.',
      'option_false_3' => 'Melalui eksperimen kisi kristal.',
    ]);

    QuestionExam::create([
      'question' => 'The particles that are found in the nucleus of an atom are…',
      'option_true' => 'Protons and neutrons.',
      'option_false_1' => 'Protons.',
      'option_false_2' => 'Neutrons and electrons.',
      'option_false_3' => 'Protons, electrons, and neutrons.',
    ]);

    QuestionExam::create([
      'question' => 'Partikel alfa yang ditembakkan pada lempeng logam tipis sebagian besar diteruskan, tetapi sebagian kecil dibelokkan atau dipantulkan. Partikel alfa yang lintasannya mengalami pembelokan adalah ...',
      'option_true' => 'Partikel alfa yang menabrak inti atom.',
      'option_false_1' => 'Partikel alfa yang menabrak electron.',
      'option_false_2' => 'Partikel alfa yang melewati ruang kosong jauh dari inti atom.',
      'option_false_3' => 'Partikel alfa yang melewati ruang kosong mendekati inti atom.',
    ]);

    QuestionExam::create([
      'question' => 'Di antara pernyataan berikut ini, yang tidak benar adalah…',
      'option_true' => 'Teori atom Rutherford dikenal sebagai model atom roti kismis.',
      'option_false_1' => 'Elektron ditemukan oleh J. J. Thomson melalui percobaan dengan tabung sinar katode.',
      'option_false_2' => 'Inti atom ditemukan oleh E. Rutherford melalui percobaan penghamburan sinar alfa.',
      'option_false_3' => 'Muatan elektron ditemukan oleh A. R. Millikan melalui percobaan tetes minyak.',
    ]);

    QuestionExam::create([
      'question' => 'Elektron-elektron dalam atom beredar mengelilingi inti dan berada pada lintasan (tingkat energi) tertentu. Elektron dapat berpindah dari satu tingkat energi ke tingkat energi lainnya disertai penyerapan atau pelepasan energi. Pernyataan ini dikemukaan oleh ….',
      'option_true' => 'Niels Bohr.',
      'option_false_1' => 'John Dalton.',
      'option_false_2' => 'Joseph John Thomson.',
      'option_false_3' => 'Ernest Rutherford.',
    ]);

    QuestionExam::create([
      'question' => 'What is meant by the atomic number of an element in the periodic table?',
      'option_true' => 'The number of protons in the nucleus of an atom.',
      'option_false_1' => 'The number of neutrons in the atomic nucleus.',
      'option_false_2' => 'The number of electrons in the nucleus of an atom.',
      'option_false_3' => 'The number of electrons in the outer layer of the atom.',
    ]);

    QuestionExam::create([
      'question' => 'Partikel dasar penyusun atom yaitu terdiri dari proton, neutron, dan elektron. Muatan listrik partikel dasar tersebut berturut-turut adalah ...',
      'option_true' => '+1; 0; -1',
      'option_false_1' => '-1; +1; 0',
      'option_false_2' => '-1; 0; +1',
      'option_false_3' => '+1; -1; 0',
    ]);

    QuestionExam::create([
      'question' => 'Apabila diketahui suatu unsur A memiliki nomor atom 16, maka elektron yang dimiliki A^(2-) adalah …',
      'option_true' => '18',
      'option_false_1' => '10',
      'option_false_2' => '12',
      'option_false_3' => '16',
    ]);

    QuestionExam::create([
      'question' => 'Diketahui suatu atom bersifat netral. Apabila nomor massa nya diketahui 16 dan nomor atom nya 8, maka berapa jumlah proton dan elektron nya berturut-turut adalah?',
      'option_true' => '8 dan 8',
      'option_false_1' => '16 dan 8',
      'option_false_2' => '8 dan 7',
      'option_false_3' => '8 dan 16',
    ]);


    QuestionExam::create([
      'question' => 'Dalam sebuah eksperimen ilmiah, seorang ahli kimia bernama Prof. Rachel mengamati ion logam X yang terbentuk. Ia menemukan bahwa ion logam X tersebut memiliki muatan +2. Prof. Rachel ingin mengetahui jumlah proton, elektron, dan neutron pada ion tersebut. Setelah melakukan penelitian lebih lanjut, ia menemukan bahwa pada atom logam X netral terdapat 12 proton dan 12 neutron. Berapa jumlah elektron yang dimiliki oleh ion logam X tersebut?',
      'option_true' => '10',
      'option_false_1' => '12',
      'option_false_2' => '14',
      'option_false_3' => '16',
    ]);

    QuestionExam::create([
      'question' => 'Aladdin menemukan sepotong kayu di taman. Dia ingin mengetahui apakah kayu tersebut merupakan isotop dari karbon. Akhirnya Aladdin melakukan beberapa pengukuran dan menemukan bahwa kayu tersebut memiliki 6 proton dan 8 neutron. Berapa jumlah elektron yang dimiliki oleh isotop tersebut? (Keadaan atom netral)',
      'option_true' => '6 elektron',
      'option_false_1' => '8 elektron',
      'option_false_2' => '14 elektron',
      'option_false_3' => '2 elektron',
    ]);

    QuestionExam::create([
      'question' => 'Berikut adalah tiga atom yang memiliki nomor atom dan nomor massa yang berbeda : Atom A memiliki nomor atom 6 dan nomor massa 12 ; Atom B memiliki nomor atom 6 dan nomor massa 14 ; Atom C memiliki nomor atom 8 dan nomor massa 16. Berdasarkan informasi tersebut, pernyataan yang benar adalah…',
      'option_true' => 'Atom A dan B adalah isotop',
      'option_false_1' => 'Atom B dan C adalah isotop',
      'option_false_2' => 'Atom A dan C adalah isotop',
      'option_false_3' => ' Atom A dan B adalah isobar',
    ]);

    QuestionExam::create([
      'question' => 'Seorang Mahasiswa Kimia sedang mempelajari partikel subatomik dalam sebuah percobaan. Dia menemukan dua partikel yang memiliki jumlah proton yang sama, tetapi jumlah neutron yang berbeda. Partikel-partikel ini termasuk dalam kelompok…',
      'option_true' => 'Isotop.',
      'option_false_1' => 'Isobar.',
      'option_false_2' => 'Isoton.',
      'option_false_3' => 'Isotonik.',
    ]);

    QuestionExam::create([
      'question' => 'Which scientist conducted experiments using alpha particles and thin gold foil, which later helped him develop his model for the atom ?',
      'option_true' => 'Ernest Rurtherford.',
      'option_false_1' => 'John dalton.',
      'option_false_2' => 'J.J Thomson.',
      'option_false_3' => 'Niels Bohr.',
    ]);

    QuestionExam::create([
      'question' => 'The number of protons in an element can be found by…',
      'option_true' => 'Looking up the atomic number.',
      'option_false_1' => 'Looking up the group the element is in.',
      'option_false_2' => 'Looking up the atomic mass.',
      'option_false_3' => 'Subtracting the atomic mass from atomic number.',
    ]);

    QuestionExam::create([
      'question' => 'Thomson made his discovery about the atom during an experiment using',
      'option_true' => 'Cathode rays.',
      'option_false_1' => 'Thermal energy.',
      'option_false_2' => 'Kinetic energy.',
      'option_false_3' => 'X rays.',
    ]);

    QuestionExam::create([
      'question' => 'Menurut model atom Bohr, perubahan energi elektron dalam atom jika berpindah ke lintasan yang lebih rendah terjadi ketika…',
      'option_true' => 'Elektron memancarkan cahaya.',
      'option_false_1' => 'Elektron mendapatkan energi kinetik tambahan.',
      'option_false_2' => 'Elektron menyerap cahaya.',
      'option_false_3' => 'Elektron bertabrakan dengan partikel lain.',
    ]);

    QuestionExam::create([
      'question' => 'The oil drop experiment was performed in 1909 to measure the elementary electric charge (it means the electrons charge) by…',
      'option_true' => 'Robert A. Millikan.',
      'option_false_1' => 'Robert Hooke.',
      'option_false_2' => 'Isaac Newton.',
      'option_false_3' => 'J.J Thomson.',
    ]);

    QuestionExam::create([
      'question' => 'What happens when electrons in an atom absorb energy?',
      'option_true' => 'Electrons will move to a higher energy shell.',
      'option_false_1' => 'Electrons will move to a lower energy shell.',
      'option_false_2' => 'Electrons will remain in the same energy shell.',
      'option_false_3' => 'Electrons will leave the atom.',
    ]);

    QuestionExam::create([
      'question' => 'Apabila partikel alfa didekati dengan inti atom yang bermuatan positif, maka partikel alfa akan…',
      'option_true' => 'Dipantulkan kembali dengan sudut yang sama.',
      'option_false_1' => 'Melewati inti atom tanpa berinteraksi.',
      'option_false_2' => 'Tidak bergerak.',
      'option_false_3' => 'Berhenti di depan inti atom.',
    ]);

    QuestionExam::create([
      'question' => 'Pada percobaan tabung sinar katode, lintasan elektron membentuk garis lurus jika...',
      'option_true' => 'Tidak terdapat medan listrik maupun medan magnet yang diterapkan.',
      'option_false_1' => 'Terdapat medan listrik yang diterapkan.',
      'option_false_2' => 'Terdapat medan magnet yang diterapkan.',
      'option_false_3' => 'Tidak ada jawaban yang tepat.',
    ]);

    QuestionExam::create([
      'question' => 'Prof. Achmad sedang melakukan penelitian tentang atom timah. Setelah melakukan serangkaian eksperimen, dia menemukan bahwa terdapat satu jenis ion timah yaitu Sn^(2+). Prof. Achmad mengetahui bahwa atom timah netral memiliki 50 proton dan 69 neutron. Lalu berapa jumlah elektron pada ion timah Sn^(2+)?',
      'option_true' => '48',
      'option_false_1' => '46',
      'option_false_2' => '50',
      'option_false_3' => '52',
    ]);
  }
}
