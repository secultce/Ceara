<?php
return [
    1 => [
        // 'slug' => \MapasCulturais\i::__('tag'),
        'slug' => 'tag',
        'entities' => [
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent',
            'MapasCulturais\Entities\Event',
            'MapasCulturais\Entities\Project',
            'MapasCulturais\Entities\Opportunity',
        ]
    ],

    2 => [
        //'slug' => \MapasCulturais\i::__('area'),
        'slug' => 'area',
        'required' => \MapasCulturais\i::__("Você deve informar ao menos uma área de atuação"),
        'entities' => [
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent',
            'MapasCulturais\Entities\Project'
        ],
        'restricted_terms' => [
            \MapasCulturais\i::__('Antropologia'),
            \MapasCulturais\i::__('Arqueologia'),
            \MapasCulturais\i::__('Arquitetura-Urbanismo'),
            \MapasCulturais\i::__('Arquivo'),
            \MapasCulturais\i::__('Arte de Rua'),
            \MapasCulturais\i::__('Arte Digital'),
            \MapasCulturais\i::__('Artes Visuais'),
            \MapasCulturais\i::__('Artesanato'),
            \MapasCulturais\i::__('Audiovisual'),
            \MapasCulturais\i::__('Cinema'),
            \MapasCulturais\i::__('Circo'),
            \MapasCulturais\i::__('Comunicação'),
            \MapasCulturais\i::__('Cultura Cigana'),
            \MapasCulturais\i::__('Cultura Digital'),
            \MapasCulturais\i::__('Cultura Estrangeira (imigrantes)'),
            \MapasCulturais\i::__('Cultura Indígena'),
            \MapasCulturais\i::__('Cultura LGBT'),
            \MapasCulturais\i::__('Cultura Negra'),
            \MapasCulturais\i::__('Cultura Popular'),
            \MapasCulturais\i::__('Dança'),
            \MapasCulturais\i::__('Design'),
            \MapasCulturais\i::__('Direito Autoral'),
            \MapasCulturais\i::__('Economia Criativa'),
            \MapasCulturais\i::__('Educação'),
            \MapasCulturais\i::__('Esporte'),
            \MapasCulturais\i::__('Filosofia'),
            \MapasCulturais\i::__('Fotografia'),
            \MapasCulturais\i::__('Gastronomia'),
            \MapasCulturais\i::__('Gestão Cultural'),
            \MapasCulturais\i::__('História'),
            \MapasCulturais\i::__('Humor'),
            \MapasCulturais\i::__('Jogos Eletrônicos'),
            \MapasCulturais\i::__('Jornalismo'),
            \MapasCulturais\i::__('Leitura'),
            \MapasCulturais\i::__('Literatura'),
            \MapasCulturais\i::__('Livro'),
            \MapasCulturais\i::__('Meio Ambiente'),
            \MapasCulturais\i::__('Mídias Sociais'),
            \MapasCulturais\i::__('Moda'),
            \MapasCulturais\i::__('Museu'),
            \MapasCulturais\i::__('Música'),
            \MapasCulturais\i::__('Novas Mídias'),
            \MapasCulturais\i::__('Patrimônio Imaterial'),
            \MapasCulturais\i::__('Patrimônio Material'),
            \MapasCulturais\i::__('Pesquisa'),
            \MapasCulturais\i::__('Produção Cultural'),
            \MapasCulturais\i::__('Rádio'),
            \MapasCulturais\i::__('Saúde'),
            \MapasCulturais\i::__('Sociologia'),
            \MapasCulturais\i::__('Teatro'),
            \MapasCulturais\i::__('Televisão'),
            \MapasCulturais\i::__('Turismo'),
            \MapasCulturais\i::__('Outros')
        ]
    ],

    3 => [
        //'slug' => \MapasCulturais\i::__('linguagem'),
        'slug' => 'linguagem',
        'required' => \MapasCulturais\i::__("Você deve informar ao menos uma linguagem"),
        'entities' => [
            'MapasCulturais\Entities\Event'
        ],
        'restricted_terms' => [
            \MapasCulturais\i::__('Artes Circenses'),
            \MapasCulturais\i::__('Artes Integradas'),
            \MapasCulturais\i::__('Artes Visuais'),
            \MapasCulturais\i::__('Audiovisual'),
            \MapasCulturais\i::__('Cinema'),
            \MapasCulturais\i::__('Cultura Digital'),
            \MapasCulturais\i::__('Cultura Indígena'),
            \MapasCulturais\i::__('Cultura Tradicional'),
            \MapasCulturais\i::__('Curso ou Oficina'),
            \MapasCulturais\i::__('Dança'),
            \MapasCulturais\i::__('Exposição'),
            \MapasCulturais\i::__('Hip Hop'),
            \MapasCulturais\i::__('Livro e Literatura'),
            \MapasCulturais\i::__('Música Popular'),
            \MapasCulturais\i::__('Música Erudita'),
            \MapasCulturais\i::__('Palestra, Debate ou Encontro'),
            \MapasCulturais\i::__('Rádio'),
            \MapasCulturais\i::__('Teatro'),
            \MapasCulturais\i::__('Outros')
        ]
    ],

    4 => [
        //'slug' => \MapasCulturais\i::__('publico'),
        'slug' => 'publico',
        'required' => \MapasCulturais\i::__("Você deve informar ao menos um público alvo"),
        'entities' => [
            'MapasCulturais\Entities\Project'
        ],
        'restricted_terms' => [
            \MapasCulturais\i::__('Adolescentes'),
            \MapasCulturais\i::__('Adultos'),
            \MapasCulturais\i::__('Afrodescentes'),
            \MapasCulturais\i::__('Crianças'),
            \MapasCulturais\i::__('Ciganos'),
            \MapasCulturais\i::__('Deficientes'),
            \MapasCulturais\i::__('Homens'),
            \MapasCulturais\i::__('Idosos'),
            \MapasCulturais\i::__('Indígenas'),
            \MapasCulturais\i::__('Jovens'),
            \MapasCulturais\i::__('LGBT'),
            \MapasCulturais\i::__('Mulheres'),
            \MapasCulturais\i::__('População da Zona Rural'),
            \MapasCulturais\i::__('Quilombolas'),
            \MapasCulturais\i::__('Ribeirinhos'),
            \MapasCulturais\i::__('Outros')
        ]
    ]
];
