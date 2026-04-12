<?php

use App\Models\{Question, User};

use function Pest\Laravel\actingAs;

it('should list all the questions', function () {
    // Arrange :: preparar
    // Criar algumas perguntas
    $user      = User::factory()->create();
    $questions = Question::factory()->count(5)->create();

    actingAs($user);

    // Act :: agir
    // Acessar a rota
    // $response = get(route('dashboard'));
    $response = $this->get(route('dashboard'));

    // Assert :: verificar
    // verificar se a lista de perguntas está sendo mostrada
    /** @var Question $q */
    foreach ($questions as $q) {
        $response->assertSee($q->question);
    }
});
