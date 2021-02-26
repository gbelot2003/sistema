<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Celeste Carey',
                'email' => 'sovem@mailinator.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5WQ8q/W5KaD4blitXcIHfe/Khf5ysPCsBRPB23vnsoXllqAiKD8cO',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'profile-photos/zZl8ccdcXLTgTddQthK0AYtpcOXzslnDSiZSlgaT.jpg',
                'created_at' => '2021-02-24 20:44:49',
                'updated_at' => '2021-02-24 21:02:20',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Cynthia Mullen',
                'email' => 'kezuqyc@mailinator.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yABTJMN4I9UGM/7W0zErXOiyMB1yC/5E70Cwo.qdWmhEfSWTm.euK',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'profile-photos/3wtr25ztCg5Sz5y4YhZ94vSpZj9A9ZlliPLTVKY7.jpg',
                'created_at' => '2021-02-24 21:24:00',
                'updated_at' => '2021-02-24 21:48:19',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Maxime Price',
                'email' => 'josianne.daugherty@example.org',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '6L6qLYSAgT',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:03',
                'updated_at' => '2021-02-25 00:03:03',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Blake Ritchie',
                'email' => 'merl02@example.net',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'g6Fb4HikAE',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:03',
                'updated_at' => '2021-02-25 00:03:03',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Travon Mosciski',
                'email' => 'virgie.gerhold@example.org',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '6qhW1eslpD',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:03',
                'updated_at' => '2021-02-25 00:03:03',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Miss Kacie Wunsch',
                'email' => 'hunter.wiegand@example.com',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'rfFLNcMbah',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:04',
                'updated_at' => '2021-02-25 00:03:04',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Dr. Christy Doyle',
                'email' => 'stiedemann.dell@example.com',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Va0kJcfdvB',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:04',
                'updated_at' => '2021-02-25 00:03:04',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Edwin Baumbach',
                'email' => 'naomi38@example.org',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '8wrHe5VNVH',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:04',
                'updated_at' => '2021-02-25 00:03:04',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Laurence Thiel',
                'email' => 'ian68@example.org',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'B6gMji8b4j',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:04',
                'updated_at' => '2021-02-25 00:03:04',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Moshe Boyle',
                'email' => 'mayer.cleve@example.net',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'o24FHZyiqN',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:04',
                'updated_at' => '2021-02-25 00:03:04',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Esperanza Wehner',
                'email' => 'twiza@example.com',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'nmgcefDpOy',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:04',
                'updated_at' => '2021-02-25 00:03:04',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Freda Greenholt',
                'email' => 'zcollier@example.net',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'DwBeYN5sEg',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:04',
                'updated_at' => '2021-02-25 00:03:04',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Brooklyn Stehr',
                'email' => 'maudie.rogahn@example.org',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'NAGJeB7Nor',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:05',
                'updated_at' => '2021-02-25 00:03:05',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Miss Laisha Schimmel',
                'email' => 'keira.langosh@example.net',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '76UE6tTeH9',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:05',
                'updated_at' => '2021-02-25 00:03:05',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Micaela Predovic II',
                'email' => 'ygrant@example.net',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'qoZ3CR7yPj',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:05',
                'updated_at' => '2021-02-25 00:03:05',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Isaias Goldner',
                'email' => 'osvaldo.morar@example.net',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'uZO6pA1QiQ',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:05',
                'updated_at' => '2021-02-25 00:03:05',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Elizabeth Kihn',
                'email' => 'brown.zena@example.net',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'koRDFKDlYI',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:05',
                'updated_at' => '2021-02-25 00:03:05',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Sophie Rath',
                'email' => 'julianne67@example.com',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'l4tnp1IWB6',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:05',
                'updated_at' => '2021-02-25 00:03:05',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Mrs. Isobel Daugherty Sr.',
                'email' => 'lbaumbach@example.org',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '0hM2aIwD55',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:06',
                'updated_at' => '2021-02-25 00:03:06',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Bernadine Ferry',
                'email' => 'prudence57@example.com',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'yDpKLWHdj7',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:06',
                'updated_at' => '2021-02-25 00:03:06',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Glenda Streich Jr.',
                'email' => 'yrutherford@example.org',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'fKAS38ny5z',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:06',
                'updated_at' => '2021-02-25 00:03:06',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Tom Lang',
                'email' => 'bridget08@example.com',
                'email_verified_at' => '2021-02-25 00:03:03',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'TGxCALB3u2',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-02-25 00:03:06',
                'updated_at' => '2021-02-25 00:03:06',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'status' => 1,
            ),
        ));

        $user = User::find(1);
        $user->assignRole('administrador');

        $user = User::find(2);
        $user->assignRole('cajera');

        $user = User::find(3);
        $user->assignRole('entregas');

    }
}