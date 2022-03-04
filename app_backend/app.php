<?php

$response = [
    '/productos' => '{
        [
            "id":       "1",
            "nombre":   "ibuprofeno",
            "precio":   "5.5",
            "imagen":   "/assets/ibuprofeno.jpg",
        ],
        [
            "id":       "2",
            "nombre":   "parecetamol",
            "precio":   "6.5",
            "imagen":   "/assets/parasetamol.jpg",
        ],
        [
            "id":       "3",
            "nombre":   "parecetamol",
            "precio":   "6.5",
            "imagen":   "/assets/parasetamol.jpg",
        ],  
        [
            "id":       "4",
            "nombre":   "parecetamol",
            "precio":   "6.5",
            "imagen":   "/assets/parasetamol.jpg",
        ],  
        [
            "id":       "5",
            "nombre":   "parecetamol",
            "precio":   "6.5",
            "imagen":   "/assets/parasetamol.jpg",
        ],  
        [
            "id":       "6",
            "nombre":   "parecetamol",
            "precio":   "6.5",
            "imagen":   "/assets/parasetamol.jpg",
        ],  
    }',
    '/carrito' => json_encode([
        [
            "id"    =>  "1",
            "nombre"=>   "parecetamol",
            "precio"=>   "6.5",
            "imagen"=>   "/assets/parasetamol.jpg",
        ],
        [
            "id"    =>  "2",
            "nombre"=>   "parecetamol",
            "precio"=>   "6.5",
            "imagen"=>   "/assets/parasetamol.jpg",
        ],  
    ]),
];





