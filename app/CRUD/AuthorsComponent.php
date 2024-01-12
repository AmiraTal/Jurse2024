<?php

namespace App\CRUD;

use App\Models\Authors;
use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;

class AuthorsComponent implements CRUDComponent
{
    // Manage actions in crud
    public $create = true;
    public $delete = true;
    public $update = true;

    // If you will set it true it will automatically
    // add `user_id` to create and update action
    public $with_user_id = true;


    // which kind of data should be showed in list page

    public function getModel()
    {
        return Authors::class;
    }

    public function fields()
    {
        return ['firstname', 'lastname', 'organism'];
    }

    // Searchable fields, if you dont want search feature, remove it

    public function searchable()
    {
        return ['firstname', 'lastname', 'organism'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    /**
     * Définit les champs de saisie pour le CRUD.
     *
     * @return array
     */
    public function inputs()
    {

        return [
            'firstname' => Field::title('Prénom'), // Affiche le champ 'firstname'
            'lastname' => Field::title('Nom'),     // Affiche le champ 'lastname'
            'organism' => Field::title('Organisme') // Affiche le champ 'organism'
        ];

    }

    public function getFormFields()
    {
        return [
            ['type' => 'text', 'name' => 'firstname', 'label' => 'Prénom'],
            ['type' => 'text', 'name' => 'lastname', 'label' => 'Nom'],
            ['type' => 'text', 'name' => 'organism', 'label' => 'Organisme'],
            // Ajouter d'autres champs ici
        ];
    }


    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
