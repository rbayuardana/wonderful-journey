<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
                UserSeeder::class,
                
            ]);

            

            DB::table('categories')->insert([
                [
                    'name' => 'Beach',
                ],
                [
                    'nama' => 'Mountain',
                ],
                [
                    'nama' => 'City and Village',
                    
                ]
                
            ]);

            DB::table('articles')->insert([
                [
                    'category_id'=>1,
                    'user_id'=>1,
                    'title'=>'The Beauty of Tanjung Pesona',
                    'description'=>'Pantai Tanjung Pesona merupakan salah satu pantai di garis pantai bagian timur Pulau Bangka, yang terkenal dengan pantai-pantainya yang indah. Karena letaknya tersebut, pantai ini menjadi tempat yang baik untuk menikmati cahaya matahari terbit.
                        Pantai Tanjung Pesona terletak di Desa Rambak, sekitar 9 Kilometer dari Kota Sungailiat atau sekitar 15 menit perjalanan dengan kendaraan bermotor, atau sekitar 45 menit dari Bandara Depati Amir di Pangkalan Baru.
                        Di sekitar kawasan Pantai Tanjung Pesona juga terdapat beberapa pantai lain yang berdekatan yang juga indah, seperti Pantai Teluk Uber yang menjadi tujuan untuk memancing dan Pantai Tikus yang terkenal karena viharanya.
                        Pantai Tanjung Pesona sebenarnya terletak dalam kawasan resort. Pantai ini adalah pantai yang landai dan  memiliki pasir putih halus serta hamparan batu granit yang tersebar di pinggir pantai dan tebing-tebing berbatu. Lanskap pantai ini seperti bertingkat tingkat. Setiap bagian pantai memiliki panorama tersendiri sehingga pengunjung tidak akan bosan dengan pemandangan yang ada di sini.
                        Pantai Tanjung Pesona sebagai sebuah kawasan resort memiliki beberapa fasilitas selain akomodasi berbintang di pinggir pantai, seperti restaurant, jogging track,  persewaan speed boat, banana boat dan jetski.  Di sekitar kawasan resort juga terdapat beberapa akomodasi lain.
                        Karena Pantai ini menghadap langsung perairan Laut China Selatan, biasanya waktu yang terbaik untuk berkunjung adalah saat dimana gelombang Laut China Selatan relatif tenang, yang biasanya adalah diantara bulan April sampai September',
                    'image' => 'Images/tanjungpesona.jpg'
    
                ],
                [
                    'category_id'=>1,
                    'user_id'=>1,
                    'title'=>'The Romantic Pink Beach',
                    'description'=> 'Pantai Pink Labuan Bajo berada di Pulau Komodo, Flores Barat, Nusa Tenggara Timur. Untuk menuju ke Lokasi, para wisatawan memang harus memanfaatkan beberapa moda transportasi. Karena keberadaannya di pulau yang dikelilingi oleh pantai-pantai.
                    Cara yang paling mudah untuk menuju Labuan Bajo adalah melalui Bali. Menggunakan pesawat berkapasitas 50 penumpang, para wisatawan bisa langsung mendarat di Bandar Udara Labuan Bajo. Dari Bandar Udara Labuan Bajo dilanjutkan menuju Pulau Komodo.',
                    'image'=> 'Images/pinkbeach.jpg'
    
                ],
                [
                    'category_id' => 2,
                    'user_id' => 1,
                    'title' => 'The Famous Bromo Mountain',
                    'description' => 'Gunung Bromo yang terletak di Jawa Timur menjadi salah satu destinasi unggulan pariwisata Indonesia. 
                        Lansekap unik, pemandangan cantik, dan tradisi lokal yang terpelihara menjadi magnet kuat untuk menarik wisatawan lokal maupun mancanegara. 
                        Tak sedikit pula pecinta alam datang berkali-kali ke gunung setinggi 2.329 mdpl ini.
                        Bagi kamu yang ingin ber- wisata Gunung Bromo dengan waktu terbatas, bukan hal mustahil untuk menjelajahi Bromo dan spot-spot menarik lain di sekitarnya hanya dalam waktu satu hari saja. Dibandingkan gunung-gunung lain, kawasan Gunung Bromo dapat dijangkau lebih mudah',
                    'image' => 'Images/bromo.jpg'
    
    
                ],
                [
                    'category_id' => 2,
                    'user_id' => 1,
                    'title' => 'Merbabu',
                    'description' => 'Merbabu merupakan salah satu gunung api yang berjenis strato, atau bisa dibilang gunung api yang sudah lama ‘tidur’. Gunung ini terletak di wilayah Magelang dan Boyolali, Jawa Tengah. Untuk jalur pendakiannya sendiri ada lima rute yang ditawarkan, namun aku dan rekanku akhirnya memilih jalur Selo. Tentu saja, kita tidak asal memilih jalur pendakian, tetapi berdasar dari berbagai sumber yang telah dibaca. Dikatakan di sana, bahwa jalur pendakian via Selo ini sangat disarankan untuk para pendaki pemula.',
                    'image' => 'Images/merbabu.jpg'
    
    
                ],
                [
                    'category_id' => 3,
                    'user_id' => 2,
                    'title' => 'The Historical Kota Tua Jakarta',
                    'description' => 'Wisata Kota Tua adalah salah satu destinasi favorit warga Jakarta dan sekitarnya. Gimana nggak jadi favorit, area ini gampang banget diakses dan bisa dinikmati gratisan; tapi tetap seru buat piknik bareng teman-teman, pasangan, maupun keluarga.
                        Untuk menuju ke sini, RedTraveler bisa menggunakan KRL sampai ke tujuan akhir yaitu stasiun Jakarta Kota. Di stasiun sendiri aja udah jadi tempat piknik tersendiri karena banyak pilihan resto cepat saji yang bisa dinikmati sambil mengagumi keindahan arsitektur bangunan stasiun yang bernuansa klasik banget. 
                        FYI aja, stasiun Jakarta Kota ini sudah ada sejak 1929 dengan nama asli Batavia-benedenstad. Karena keindahan arsitekturnya pula stasiun Jakarta Kota sering dijadikan spot foto buat para fotografer profesional maupun nonprofesional.',
                    'image' => 'Images/kotatua.jpg'
    
    
                ],
                [
                    'category_id' => 3,
                    'user_id' => 2,
                    'title' => 'The New Malioboro',
                    'description'=> 'Akhir tahun lalu, Pemerintah Kota Yogyakarta berencana menggandeng operator untuk membangun aplikasi pemanggil andong dan becak secara online. Aplikasi tersebut mirip seperti ojek online, tetapi untuk memanggil andong dan becak. Dengan adanya aplikasi tersebut diharapkan, dapat memudahkan kamu yang akan berkunjung ke Jalan Malioboro. Diharapkan, dengan wajah baru dari Jalan Malioboro, makin banyak wisatawan yang berkunjung ke Yogyakarta. Pada tahun 2019, Dinas Pariwisata Yogyakarta menargetkan sekitar 3,4 juta wisatawan, yang akan terus bertambah hingga 4 tahun mendatang.',
                    'image'=> 'Images/malioboro.jpg'
    
    
                ]
    
         
            ]);
    
            
        
    }
}


