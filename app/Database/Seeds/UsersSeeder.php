<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'email' => 'clover.cloverr1@gmail.com',
                'username' => 'admin',
                'password_hash' => '$2y$12$3xxSBC4i/uiQmQY6XWNj6.6mm9CMjNKJoH6Z7zVJLYtMwqzK2f.bi',
                'reset_hash' => null,
                'reset_at' => null,
                'reset_expires' => null,
                'activate_hash' => null,
                'status' => null,
                'status_message' => null,
                'active' => 1,
                'force_pass_reset' => 0,
                'created_at' => '2021-05-18 01:30:55',
                'updated_at' => '2021-05-18 01:30:55',
                'deleted_at' => null
            ],
            [
                'id' => 2,
                'email' => 'dokter@myhospital.com',
                'username' => 'dokter',
                'password_hash' => '$2y$12$3xxSBC4i/uiQmQY6XWNj6.6mm9CMjNKJoH6Z7zVJLYtMwqzK2f.bi',
                'reset_hash' => null,
                'reset_at' => null,
                'reset_expires' => null,
                'activate_hash' => null,
                'status' => null,
                'status_message' => null,
                'active' => 1,
                'force_pass_reset' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => null
            ],
            [
                'id' => 3,
                'email' => 'kasir@myhospital.com',
                'username' => 'kasir',
                'password_hash' => '$2y$12$3xxSBC4i/uiQmQY6XWNj6.6mm9CMjNKJoH6Z7zVJLYtMwqzK2f.bi',
                'reset_hash' => null,
                'reset_at' => null,
                'reset_expires' => null,
                'activate_hash' => null,
                'status' => null,
                'status_message' => null,
                'active' => 1,
                'force_pass_reset' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => null
            ]
        ];

        $this->db->table('users')->ignore(true)->insertBatch($data);

        // Buat Role (Grup)
        $groups = [
            ['id' => 1, 'name' => 'admin', 'description' => 'Administrator'],
            ['id' => 2, 'name' => 'dokter', 'description' => 'Dokter'],
            ['id' => 3, 'name' => 'kasir', 'description' => 'Kasir']
        ];
        $this->db->table('auth_groups')->ignore(true)->insertBatch($groups);

        // Hubungkan User dengan Role-nya
        $group_users = [
            ['group_id' => 1, 'user_id' => 1], // user admin -> role admin
            ['group_id' => 2, 'user_id' => 2], // user dokter -> role dokter
            ['group_id' => 3, 'user_id' => 3]  // user kasir -> role kasir
        ];
        $this->db->table('auth_groups_users')->ignore(true)->insertBatch($group_users);
    }
}
