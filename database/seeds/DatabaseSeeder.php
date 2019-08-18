<?php

use Illuminate\Database\Seeder;

use App\Category;
use App\Question;
use App\Answer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //creación categorias
        Category::create([
          'name' => 'Cultura General'
        ]);
        Category::create([
          'name' => 'Arte'
        ]);
        Category::create([
          'name' => 'Literatura'
        ]);
        Category::create([
          'name' => 'Ciencia'
        ]);
        Category::create([
          'name' => 'Deportes'
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿A qué país pertenece la isla de Tasmania?',
          'category_id' => 1,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Australia',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Estados Unidos',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Portugal',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Ninguna es correcta',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál es el código internacional para Cuba?',
          'category_id' => 1,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'CU',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'CA',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'CB',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Ninguna es correcta',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿En qué país situarías la ciudad de Cali?',
          'category_id' => 1,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Colombia',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Venezuela',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Costa Rica',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Chile',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál de estas características no pertenece al clima Mediterráneo?',
          'category_id' => 1,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Lluvias muy abundantes',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Veranos secos y calurosos',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Es un tipo de clima templado',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Variables temperaturas en primavera',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál es principal celebración holandesa?',
          'category_id' => 1,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'El día de la Reina',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Navidad',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'La llegada del verano',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Hallowen',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál de las siguientes especialidades NO es típica de la cocina estadounidense?',
          'category_id' => 1,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Todas son típicas',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'La hamburguesa',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'El pastel de cangrejo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'La tarta de manzana',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuántos soldados argentinos murieron en la Guerra de las Malvinas?',
          'category_id' => 1,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => '649',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => '200',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => '987',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => '1452',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Con qué emperador estuvo casada Cleopatra?',
          'category_id' => 1,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Todas son correctas',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Ptolomeo XIV',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Julio César',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Marco Antonio',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Quién liberó a Argentina, Chile y Perú?',
          'category_id' => 1,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'José de San Martín',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => "Ernesto 'Che' Guevara",
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Simón Bolívar',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Manual Belgrano',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Dónde surgió la filosofía?',
          'category_id' => 1,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Grecia',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'España',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Egipto',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Japón',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Quién pintó el cuado "El jardín de las delicias"?',
          'category_id' => 2,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'El Bosco',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Carvaggio',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Velázquez',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Arcimboldo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Qué fotografía, sobre todo, Anne Geddes?',
          'category_id' => 2,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Bebés',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Famosos',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Farolas',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Palomas',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿En qué siglo nació el artista conocido como Caravaggio?',
          'category_id' => 2,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'XVI',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'XIV',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'XII',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'XVIII',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿En qué está esculpida la Venus de Milo?',
          'category_id' => 2,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Mármol',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Bronce',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'question_id' => $question_id,
          'answer' => 'Piedra',
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Madera',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Quién pintó La Capilla Sixtina?',
          'category_id' => 2,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Miguel Ángel',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Giorgio Vasari',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Leonardo Da Vinci',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Tiziano',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿A quién está dedicada la torre más alta de la Sagrada Familia de Gaudí, aún pendiente de construcción?',
          'category_id' => 2,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Jesucristo',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'La Virgen María',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'El Espiritú Santo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'La Sagrada Familia',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Qué famosa artista estaba casada con su colega, Diego Rivera?',
          'category_id' => 2,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Frida Kahlo',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'María Antonieta',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Frida Alejandra',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Antonieta',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿De qué estilo artístico es la catedral de Santa María de Toledo?',
          'category_id' => 2,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Gótico',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Románico',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Barroco',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Ninguno',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál es el género teatral intermedio entre la comedia y la tragedia?',
          'category_id' => 2,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Drama',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Zarzuela',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Entremés',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Farsa',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿De qué material está hecho un saxofón?',
          'category_id' => 2,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Latón',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Cobre',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Hierro',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Acero',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál es la ciudad fetiche del escritor Paul Auster?',
          'category_id' => 3,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Nueva York',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Londres',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'París',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Chicago',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Qué profesión tenía Hércules Poiriot en las novelas de Agatha Christie?',
          'category_id' => 3,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Detective',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Policía',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Médico',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Bombero',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);
        //creación pregunta
        $question = Question::create([
          'question' => '¿Quién escribió "El túnel"?',
          'category_id' => 3,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Ernesto Sabato',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Gabrial García Márquez',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Mario Vargas Llosa',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Jorge Luis Borges',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Quién es el autor de "El retrato de Dorian Gray"?',
          'category_id' => 3,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Oscar Wilde',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Charles Dickens',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Arthur Conan Doyle',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'George Orwell',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Quién es el autor de "Moby Dick"?',
          'category_id' => 3,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Herman Melville',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Henry David Thoreau',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Ralph Waldo Emerson',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Henry James',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Quién es la autora de "Los Juegos del Hambre"?',
          'category_id' => 3,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Suzanne Collins',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Blue Jeans',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Jordi Sierra i Fabra',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Bono Bidari',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Quién es el autor de "El principito"?',
          'category_id' => 3,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Antoine de Saint-Exupery',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Cuahutemoc Sanchez',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Beatriz Espejo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Ninguna es correcta',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿A qué se dedicaban los siete enanitos?',
          'category_id' => 3,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Eran mineros',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Eran carpinteros',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Eran albañiles',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Eran agricultores',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Quién se comió a Garbancito según el cuento popular?',
          'category_id' => 3,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Un Buey',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Un gigante',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Una ballena',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Un lobo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cómo se llama el perro de Obélix?',
          'category_id' => 3,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Ideafix',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Panoramix',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Milú',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Indiofix',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál de las sisguientes enfermedades ataca al higado?',
          'category_id' => 4,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Hepatitis',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Diabetes',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Artrósis',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Cifoescoliosis',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Qué cambio de estado ocurre en la sublimación?',
          'category_id' => 4,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'De sólido a gaseoso',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'De sólido a líquido',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'De gaseoso a líquido',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'De líquido a solido',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);
        //creación pregunta
        $question = Question::create([
          'question' => '¿De qué color es la sange de los peces?',
          'category_id' => 4,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Rojo',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Verde oscuro',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Marrón oscuro',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Azul',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál de los siguientes órganos NO es parte del sistema inmunológico?',
          'category_id' => 4,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Esófago',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Médula ósea',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Bazo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Timo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Qué estudia la icitología?',
          'category_id' => 4,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Los peces',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Los insectos',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Las erupciones cutáneas',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Las rocas',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál es el mamífero más grande conocido hasta la actualidad?',
          'category_id' => 4,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Ballena Azul',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Cachalote',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Elefante',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Rinoceronte',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cómo se llama el movimiento que realiza la Tierra alrededor del Sol?',
          'category_id' => 4,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Traslación',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Rotación',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'La Tierra no se mueve',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Órbita',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuánto es la raíz cuadrada del 121?',
          'category_id' => 4,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => '11',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => '13',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => '10',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => '21',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Quién fue el Inventor de la dinamita?',
          'category_id' => 4,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Alfred Nobel',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Heisenberg',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Antony Stark',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Walter White',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál es la distribución de Linux más usada?',
          'category_id' => 4,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Ubuntu',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Debian',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Fedora',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Mint',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál es el clásico rival del Flamengo (BRA)?',
          'category_id' => 5,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Corinthians',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Palmeiras',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Cruzeiro',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'São Paulo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Qué jugadora de hockey sobre césped ha ganado 7 veces el premio a la mejor jugadora del mundo?',
          'category_id' => 5,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Luciana Aymar',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Natascha Keller',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Alyson Annan',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Maartje Paumen',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál es el estilo de natación más rápido?',
          'category_id' => 5,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Crol',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Espalda',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Mariposa',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Pecho',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuántos jugadores componen un equipo de rugby?',
          'category_id' => 5,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => '15',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => '11',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => '12',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => '21',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál de las siguientes modalidades no forma parte del deporte rural vasco?',
          'category_id' => 5,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Desintegramiento de piedra',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Arrastre de piedra',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Lanzamiento de fardo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Corte de troncos',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿De qué deporte es el longboard una de las modalidades?',
          'category_id' => 5,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Skateboard',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Snowboard',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Alpinismo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Surf',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuántos puntos vale un tiro libre encestado en baloncesto?',
          'category_id' => 5,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Uno',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Dos',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Tres',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Depende',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Cuál de estas frases NO fue dicha por Diego Armando Maradona?',
          'category_id' => 5,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'La pelota no dobla',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'Pelé, debutó con un pibe',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Segurola y La Habana 4310, 7mo piso',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'La pelota no se mancha',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Dónde se inventó el tenis de mesa?',
          'category_id' => 5,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'Inglaterra',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'China',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Japón',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'Korea del Sur',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        //creación pregunta
        $question = Question::create([
          'question' => '¿Con qué apodo fue conocido el velocista Carl Lewis?',
          'category_id' => 5,
        ]);

        $question_id = $question->id;

        //creacion respuesta correcta
        Answer::create([
          'answer' => 'El hijo del viento',
          'question_id' => $question_id,
          'isCorrect' => 1,
        ]);

        //creación respustas incorrectas
        Answer::create([
          'answer' => 'El rayo',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'La chispa de Birmingham',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);

        Answer::create([
          'answer' => 'La gacela negra',
          'question_id' => $question_id,
          'isCorrect' => 0,
        ]);
    }
}
