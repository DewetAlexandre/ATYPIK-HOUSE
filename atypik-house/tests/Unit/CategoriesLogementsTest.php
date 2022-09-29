<?php

use App\Models\Categorie_logement;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

it('can fetch a categorie logement', function () {
    $categorie = Categorie_logement::factory()->create();

    $response = $this->getJson("/web/categories/{$categorie->id}/recherche");
    
    $data = [
        'message' => 'Retrieved To-do',
        'todo' => [
            'id' => $categorie->id,
            'nom' => $categorie->nom,
            'image' => $categorie->image,
        ]
    ];
    $response->assertStatus(200)->assertJson($data);
});



/*
it('does find a logement by categories with a destination field', function () {
    $response = $this->postJson('/web/categories/{id}/recherche', []);
    $response->assertStatus(422);
});

it('does find a logement by categories with a nombreVacanciers field', function () {
    $response = $this->postJson('/web/categories/{id}/recherche', []);
    $response->assertStatus(422);
});

it('does find a logement by categories with a dateDebut field', function () {
    $response = $this->postJson('/web/categories/{id}/recherche', []);
    $response->assertStatus(422);
});

it('does find a logement by categories with a dateFin field', function () {
    $response = $this->postJson('/web/categories/{id}/recherche', []);
    $response->assertStatus(422);
});
*/
