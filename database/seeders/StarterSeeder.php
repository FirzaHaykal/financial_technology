<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Role;
use App\Models\Saldo;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(["name" => "Administrator"]);
        $bank = Role::create(["name" => "Bank"]);
        $kantin = Role::create(["name" => "Kantin"]);
        $siswa = Role::create(["name" => "Siswa"]);

        User::create([
            "name" => "Budi Setiawan",
            "email" => "admin@admin.com",
            "password" => Hash::make("admin@admin.com"),
            "role_id" => $admin->id
        ]);

        User::create([
            "name" => "Malik Jamal",
            "email" => "shopmalik@shop.com",
            "password" => Hash::make("shopmalik@shop.com"),
            "role_id" => $kantin->id
        ]);

        User::create([
            "name" => "Liam Mild",
            "email" => "bank.1@bank.com",
            "password" => Hash::make("bank.1@bank.com"),
            "role_id" => $bank->id
        ]);

        $reynald = User::create([
            "name" => "Reynald Cahyadi",
            "email" => "siswa.reynald@siswa.com",
            "password" => Hash::make("siswa.reynald@siswa.com"),
            "role_id" => $siswa->id
        ]);

        Barang::create([
            "name" => "Burger",
            "price" => 14000,
            "stock" => 50,
            "desc" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
        ]);

        Barang::create([
            "name" => "Pizza",
            "price" => 90000,
            "stock" => 50,
            "desc" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
        ]);

        Barang::create([
            "name" => "Fried Chicken",
            "price" => 32000,
            "stock" => 50,
            "desc" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
        ]);

        Barang::create([
            "name" => "French Fries",
            "price" => 20000,
            "stock" => 50,
            "desc" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
        ]);

        Barang::create([
            "name" => "Coca Cola",
            "price" => 12000,
            "stock" => 50,
            "desc" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
        ]);

        Saldo::create([
            "user_id" => $reynald->id,
            "saldo" => 150000
        ]);

        //Isi Saldo
        Transaksi::create([
            "user_id" => $reynald->id,
            "barang_id" => null,
            "jumlah" => 150000,
            "invoice_id" => "SAL_001",
            "type" => 1,
            "status" => 3
        ]);
    }
}

