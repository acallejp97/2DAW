<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Picture;
use App\User;

class DatabaseSeeder extends Seeder
{
	 private $arrayAutores = array(
		array(
			'nom_autor' => 'Edgard Degas',
			'des_autor' => 'Degas es uno de esos pintores con un estilo único'
		),
		array(
			'nom_autor' => 'Vincent Van Gogh',
			'des_autor' => 'Vincent Willem van Gogh fue un pintor neerlandés'
		),
		array(
			'nom_autor' => 'Edouard Manet',
			'des_autor' => 'Édouard Manet fue un pintor francés, reconocido po'
		),
		array(
			'nom_autor' => 'Paul Cézanne',
			'des_autor' => 'Paul Cézanne  es el padre de la pintura moderna'
		),
		array(
			'nom_autor' => 'Henri de Toulouse-Lautrec',
			'des_autor' => 'fue un pintor y cartelista francés, que destacó po'
		),
		array(
			'nom_autor' => 'Pablo Picasso',
			'des_autor' => 'Pablo Ruiz Picasso fue un pintor y escultor españo'
		)
	);

	 private $arrayCuadros = array(
		array(
			'nom_cuadro' => 'Naturaleza muerta con cesta de',
			'des_cuadro' => 'Naturaleza muerta con cesta de frutas (mesa de coc',
			'foto_cuadro' => 'bodegon.jpg',
			'autor' => 4
		),
		array(
			'nom_cuadro' => 'La casa del ahorcado en Auvers',
			'des_cuadro' => 'La casa del ahorcado en Auvers-sur-Oise - 1873 - ó',
			'foto_cuadro' => 'ahorcado.jpg',
			'autor' => 4
		),
		array(
			'nom_cuadro' => 'Los girasoles',
			'des_cuadro' => 'Los girasoles (vaso con 15 girasoles)',
			'foto_cuadro' => 'girasoles.jpg',
			'autor' => 2
		),
		array(
			'nom_cuadro' => 'La chambre de Van Gogh à Arles',
			'des_cuadro' => 'La chambre de Van Gogh à Arles (La habitación del ',
			'foto_cuadro' => 'habitación.jpg',
			'autor' => 2
		),
		array(
			'nom_cuadro' => 'Dans le lit',
			'des_cuadro' => 'en la cama)\", 1893 - óleo sobre lienzo, 54-70.5',
			'foto_cuadro' => 'cama.jpg',
			'autor' => 5
		),
		array(
			'nom_cuadro' => 'En el Moulin Rouge',
			'des_cuadro' => 'En el Moulin Rouge\", 1890 - óleo sobre lienzo',
			'foto_cuadro' => 'moulin.jpg',
			'autor' => 5
		),
		array(
			'nom_cuadro' => 'Gernika',
			'des_cuadro' => 'Guernica es un famoso cuadro de Pablo Picasso',
			'foto_cuadro' => 'Gernika.jpg',
			'autor' => 6
		),
		array(
			'nom_cuadro' => 'La Siesta',
			'des_cuadro' => 'Fue pintado mientras el autor se encontraba intern',
			'foto_cuadro' => 'la siesta.jpg',
			'autor' => 2
		)
	);

	//
	
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedAuthors();
  		$this->command->info('Egilen taula datuekin beteta!');

  		//Koadroen datuak
        self::seedPictures();
  		$this->command->info('Koadroen taula datuekin beteta!');

  		//Erabiltzaileen taula betetzeko
  		self::seedUsers();
    	$this->command->info('Tabla usuarios inicializada con datos!');
    }

    //Haziak egileen taula betetzeko
    public function seedAuthors()
    {
        //Databaseen datuak ezabatzeko
        DB::table('authors')->delete();

        //
        foreach( $this->arrayAutores as $autor ) {
    		$p = new Author;
		    $p->nom_autor = $autor['nom_autor'];
		    $p->des_autor = $autor['des_autor'];
		    $p->save();
		}
    }

    //Haziak koadroen taula betetzeko
    public function seedPictures()
    {
        //Databaseen datuak ezabatzeko
        DB::table('pictures')->delete();

        //
        foreach( $this->arrayCuadros as $cuadro ) {
    		$p = new Picture;
		    $p->nom_cuadro = $cuadro['nom_cuadro'];
		    $p->des_cuadro = $cuadro['des_cuadro'];
		    $p->foto_cuadro = $cuadro['foto_cuadro'];
		    $p->autor = $cuadro['autor'];
		    $p->save();
		}
    }

    //Haziak erabiltzileen taula betetzeko
    public function seedUsers()
    {
        //Databaseen datuak ezabatzeko
        DB::table('users')->delete();

        //1.Erabiltzailea
       	$p = new User;
		$p->name = 'paco';
		$p->email = 'foo2@bar.com';
		//$p->$password = Hash::make('paco');
		$p->password = bcrypt('paco');
		$p->created_at = \Carbon\Carbon::now();
		$p->updated_at = \Carbon\Carbon::now();
		$p->save();

		//2.Erabiltzailea
		User::create(array(
			'name' => 'admin',
			'email' => 'foo@bar.com',
			'password' => bcrypt('admin'),
			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()));
    }
}
