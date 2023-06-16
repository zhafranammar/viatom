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
      'question' => 'What is the atomic number of the element?',
      'option_true' => 'Atomic number is the number of protons in the nucleus of an atom.',
      'option_false_1' => 'Atomic number is the number of neutrons in the nucleus of an atom.',
      'option_false_2' => 'Atomic number is the number of electrons in the nucleus of an atom.',
      'option_false_3' => 'Atomic number is the number of protons and neutrons in the nucleus of an atom.',
    ]);
    QuestionExam::create([
      'question' => 'What is the mass number of the element?',
      'option_true' => 'Mass number is the number of protons and neutrons in the nucleus of an atom.',
      'option_false_1' => 'Mass number is the number of protons in the nucleus of an atom.',
      'option_false_2' => 'Mass number is the number of neutrons in the nucleus of an atom.',
      'option_false_3' => 'Mass number is the number of electrons in the nucleus of an atom.',
    ]);
    QuestionExam::create([
      'question' => 'What is the atomic mass of the element?',
      'option_true' => 'Atomic mass is the average mass of an element.',
      'option_false_1' => 'Atomic mass is the mass of an element.',
      'option_false_2' => 'Atomic mass is the mass of an atom.',
      'option_false_3' => 'Atomic mass is the average mass of an atom.',
    ]);
    QuestionExam::create([
      'question' => 'What is the atomic mass unit?',
      'option_true' => 'Atomic mass unit is the unit of measurement for atomic mass.',
      'option_false_1' => 'Atomic mass unit is the unit of measurement for atomic number.',
      'option_false_2' => 'Atomic mass unit is the unit of measurement for mass number.',
      'option_false_3' => 'Atomic mass unit is the unit of measurement for mass.',
    ]);
    QuestionExam::create([
      'question' => 'Apa teori atom menurut dalton?',
      'option_true' => 'Atom adalah partikel yang tidak dapat dibagi lagi.',
      'option_false_1' => 'Atom adalah partikel yang dapat dibagi lagi.',
      'option_false_2' => 'Atom adalah partikel yang dapat dibagi menjadi proton, neutron, dan elektron.',
      'option_false_3' => 'Atom adalah partikel yang dapat dibagi menjadi proton, neutron, elektron, dan partikel lainnya.',
    ]);
    QuestionExam::create([
      'question' => 'Apa teori atom menurut thomson?',
      'option_true' => 'Atom adalah partikel yang dapat dibagi menjadi proton, neutron, dan elektron.',
      'option_false_1' => 'Atom adalah partikel yang tidak dapat dibagi lagi.',
      'option_false_2' => 'Atom adalah partikel yang dapat dibagi lagi.',
      'option_false_3' => 'Atom adalah partikel yang dapat dibagi menjadi proton, neutron, elektron, dan partikel lainnya.',
    ]);
    QuestionExam::create([
      'question' => 'Apa teori atom menurut rutherford?',
      'option_true' => 'Atom adalah partikel yang dapat dibagi menjadi proton, neutron, dan elektron.',
      'option_false_1' => 'Atom adalah partikel yang tidak dapat dibagi lagi.',
      'option_false_2' => 'Atom adalah partikel yang dapat dibagi lagi.',
      'option_false_3' => 'Atom adalah partikel yang dapat dibagi menjadi proton, neutron, elektron, dan partikel lainnya.',
    ]);
    QuestionExam::create([
      'question' => 'Apa teori atom menurut bohr?',
      'option_true' => 'Atom adalah partikel yang dapat dibagi menjadi proton, neutron, dan elektron.',
      'option_false_1' => 'Atom adalah partikel yang tidak dapat dibagi lagi.',
      'option_false_2' => 'Atom adalah partikel yang dapat dibagi lagi.',
      'option_false_3' => 'Atom adalah partikel yang dapat dibagi menjadi proton, neutron, elektron, dan partikel lainnya.',
    ]);
  }
}
