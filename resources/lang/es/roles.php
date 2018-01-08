<?php

return [

    'title' => 'Roles',
    'parent' => 'Aceso',
    'name' => 'rol|roles',
    'list' => 'Listado de :title',
    'add' => 'Agregar nuevo :name',
    'edit' => 'Editar :name :Resource',
    'view' => 'Ver :name :Resource',

    'table' => [
      'id' => 'ID',
      'action' => 'Acción',
      'name' => 'Nombre',
      'slug' => 'Slug',
      'description' => 'Descripción',
      'permissions' => 'Permisos',
      'status' => 'Estado',
    ],

    // Alerts
    'resource-created' => 'Nuevo rol creado.',
    'resource-updated' => 'Rol actualizado satisfactoriamente.',
    'resource-deleted' => 'Rol eliminado.',

    'confirm-delete' => 'Esta acción no puede ser revertida. ¿Estás seguro?',
];
