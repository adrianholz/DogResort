<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_action('cmb2_admin_init', 'cmb2_fields_home');

function get_field($key, $page_id = 0) {
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0) {
  echo get_field($key, $page_id);
}

function cmb2_fields_home() {
	$cmb = new_cmb2_box([
		'id' => 'home_box',
		'title' => 'Home',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-home.php',
		],
	]);

  $cmb->add_field([
    'name' => 'Título Slide 1',
    'id' => 'titulo-slide-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Descrição Slide 1',
    'id' => 'descricao-slide-1',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Slide 1 (Desktop)',
    'id' => 'imagem-slide-1-desktop',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 820x820)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Slide 1 (Mobile)',
    'id' => 'imagem-slide-1-mobile',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 820x820)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Título Slide 2',
    'id' => 'titulo-slide-2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Descrição Slide 2',
    'id' => 'descricao-slide-2',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Slide 2 (Desktop)',
    'id' => 'imagem-slide-2-desktop',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 820x820)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Slide 2 (Mobile)',
    'id' => 'imagem-slide-2-mobile',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 820x820)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Título Slide 3',
    'id' => 'titulo-slide-3',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Descrição Slide 3',
    'id' => 'descricao-slide-3',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Slide 3 (Desktop)',
    'id' => 'imagem-slide-3-desktop',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 820x820)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Slide 3 (Mobile)',
    'id' => 'imagem-slide-3-mobile',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 820x820)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Título Slide 4',
    'id' => 'titulo-slide-4',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Descrição Slide 4',
    'id' => 'descricao-slide-4',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Slide 4 (Desktop)',
    'id' => 'imagem-slide-4-desktop',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 820x820)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Slide 4 (Mobile)',
    'id' => 'imagem-slide-4-mobile',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 820x820)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Título Slide 5',
    'id' => 'titulo-slide-5',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Subtítulo Slide 5',
    'id' => 'subtitulo-slide-5',
    'type' => 'text_medium',
  ]);

  $cmb->add_field([
    'name' => 'Descrição Slide 5',
    'id' => 'descricao-slide-5',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Slide 5 (Desktop)',
    'id' => 'imagem-slide-5-desktop',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 820x820)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Slide 5 (Mobile)',
    'id' => 'imagem-slide-5-mobile',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 820x820)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Título Serviços',
    'id' => 'titulo-servicos',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Descrição Serviços',
    'id' => 'descricao-servicos',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Título Estrutura',
    'id' => 'titulo-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Subtítulo Estrutura',
    'id' => 'subtitulo-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $itens_estrutura = $cmb->add_field([
    'name' => 'Itens Estrutura',
    'id' => 'itens-estrutura',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Item {#}',
      'add_button' => 'Adicionar Item',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmb->add_group_field($itens_estrutura, [
    'name' => 'Item',
    'id' => 'item-estrutura',
    'type' => 'text_medium',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Estrutura Home',
    'id' => 'imagem-estrutura-home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 600x600)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmb->add_field([
    'name' => 'Título Dúvidas',
    'id' => 'titulo-duvidas',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 1',
    'id' => 'duvida-1',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 1',
    'id' => 'resposta-1',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 2',
    'id' => 'duvida-2',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 2',
    'id' => 'resposta-2',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 3',
    'id' => 'duvida-3',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 3',
    'id' => 'resposta-3',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 4',
    'id' => 'duvida-4',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 4',
    'id' => 'resposta-4',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 5',
    'id' => 'duvida-5',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 5',
    'id' => 'resposta-5',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 6',
    'id' => 'duvida-6',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 6',
    'id' => 'resposta-6',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 7',
    'id' => 'duvida-7',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 7',
    'id' => 'resposta-7',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 8',
    'id' => 'duvida-8',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 8',
    'id' => 'resposta-8',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 9',
    'id' => 'duvida-9',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 9',
    'id' => 'resposta-9',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 10',
    'id' => 'duvida-10',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 10',
    'id' => 'resposta-10',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 11',
    'id' => 'duvida-11',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 11',
    'id' => 'resposta-11',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 12',
    'id' => 'duvida-12',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 12',
    'id' => 'resposta-12',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 13',
    'id' => 'duvida-13',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 13',
    'id' => 'resposta-13',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Dúvida 14',
    'id' => 'duvida-14',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmb->add_field([
    'name' => 'Resposta 14',
    'id' => 'resposta-14',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare = new_cmb2_box([
		'id' => 'daycare_box',
		'title' => 'Daycare',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-daycare.php',
		],
	]);

  $cmbDaycare->add_field([
    'name' => 'Logotipo Daycare',
    'id' => 'logotipo-daycare',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbDaycare->add_field([
    'name' => 'Pré-título',
    'id' => 'pre-titulo-daycare',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Título',
    'id' => 'titulo-daycare',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Descrição',
    'id' => 'descricao-daycare',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Imagem 1',
    'id' => 'daycare-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 360x300)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbDaycare->add_field([
    'name' => 'Imagem 2',
    'id' => 'daycare-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 540x380)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbDaycare->add_field([
    'name' => 'Imagem 3',
    'id' => 'daycare-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 540x380)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbDaycare->add_field([
    'name' => 'Benefícios Título',
    'id' => 'beneficios-titulo-daycare',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Benefícios 1',
    'id' => 'beneficios-daycare-1',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Benefícios 2',
    'id' => 'beneficios-daycare-2',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Benefícios 3',
    'id' => 'beneficios-daycare-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Título 1 #cuidadosdogresort',
    'id' => 'titulo-cuidadosdogresort-1',
    'type' => 'text_small',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Descrição 1 #cuidadosdogresort',
    'id' => 'descricao-cuidadosdogresort-1',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Título 2 #cuidadosdogresort',
    'id' => 'titulo-cuidadosdogresort-2',
    'type' => 'text_small',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Descrição 2 #cuidadosdogresort',
    'id' => 'descricao-cuidadosdogresort-2',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbDaycare->add_field([
    'name' => 'Observação #cuidadosdogresort',
    'id' => 'obs-cuidadosdogresort',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbRelax = new_cmb2_box([
		'id' => 'relax_box',
		'title' => 'Hospedagem',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-hospedagem.php',
		],
	]);

  $cmbRelax->add_field([
    'name' => 'Logotipo Hospedagem',
    'id' => 'logotipo-hospedagem',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbRelax->add_field([
    'name' => 'Pré-título',
    'id' => 'pre-titulo-hospedagem',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Título',
    'id' => 'titulo-hospedagem',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Descrição',
    'id' => 'descricao-hospedagem',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Imagem 1',
    'id' => 'hospedagem-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 530x475)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbRelax->add_field([
    'name' => 'Imagem 2',
    'id' => 'hospedagem-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 540x475)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbRelax->add_field([
    'name' => 'Título 2',
    'id' => 'titulo-2-hospedagem',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Descrição 2',
    'id' => 'descricao-2-hospedagem',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Imagem 3',
    'id' => 'hospedagem-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 540x475)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbRelax->add_field([
    'name' => 'Título 3',
    'id' => 'titulo-3-hospedagem',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Item 1',
    'id' => 'item-1-hospedagem',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Item 2',
    'id' => 'item-2-hospedagem',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Item 3',
    'id' => 'item-3-hospedagem',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Item 4',
    'id' => 'item-4-hospedagem',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Título 4',
    'id' => 'titulo-4-hospedagem',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRelax->add_field([
    'name' => 'Descrição 4',
    'id' => 'descricao-4-hospedagem',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbBeauty = new_cmb2_box([
		'id' => 'beauty_box',
		'title' => 'Banho e Tosa',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-banho-e-tosa.php',
		],
	]);

  $cmbBeauty->add_field([
    'name' => 'Logotipo Banho e Tosa',
    'id' => 'logotipo-beauty',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbBeauty->add_field([
    'name' => 'Pré-título',
    'id' => 'pre-titulo-beauty',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbBeauty->add_field([
    'name' => 'Título',
    'id' => 'titulo-beauty',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbBeauty->add_field([
    'name' => 'Descrição',
    'id' => 'descricao-beauty',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbBeauty->add_field([
    'name' => 'Imagem 1',
    'id' => 'beauty-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 530x740)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbBeauty->add_field([
    'name' => 'Título 2',
    'id' => 'titulo-beauty-2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbBeauty->add_field([
    'name' => 'Descrição 2',
    'id' => 'descricao-beauty-2',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbBeauty->add_field([
    'name' => 'Imagem 2',
    'id' => 'beauty-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 560x710)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbNatacao = new_cmb2_box([
		'id' => 'natacao_box',
		'title' => 'Natação',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-natacao.php',
		],
	]);

  $cmbNatacao->add_field([
    'name' => 'Logotipo Natação',
    'id' => 'logotipo-natacao',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbNatacao->add_field([
    'name' => 'Pré-título',
    'id' => 'pre-titulo-natacao',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Título',
    'id' => 'titulo-natacao',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Descrição',
    'id' => 'descricao-natacao',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Imagem 1',
    'id' => 'natacao-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 500x335)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbNatacao->add_field([
    'name' => 'Imagem 2',
    'id' => 'natacao-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 540x426)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbNatacao->add_field([
    'name' => 'Título 2',
    'id' => 'titulo-natacao-2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 1',
    'id' => 'item-1-natacao',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 2',
    'id' => 'item-2-natacao',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  

  $cmbNatacao->add_field([
    'name' => 'Título 3',
    'id' => 'titulo-natacao-3',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 1',
    'id' => 'item-1-natacao-2',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 2',
    'id' => 'item-2-natacao-2',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 3',
    'id' => 'item-3-natacao-2',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 4',
    'id' => 'item-4-natacao-2',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 5',
    'id' => 'item-5-natacao-2',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Imagem 3',
    'id' => 'natacao-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 540x478)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 1 #cuidadosdogresort',
    'id' => 'item-1-natacao-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 2 #cuidadosdogresort',
    'id' => 'item-2-natacao-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 3 #cuidadosdogresort',
    'id' => 'item-3-natacao-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 4 #cuidadosdogresort',
    'id' => 'item-4-natacao-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 5 #cuidadosdogresort',
    'id' => 'item-5-natacao-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Item 6 #cuidadosdogresort',
    'id' => 'item-6-natacao-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Imagem 4 #cuidadosdogresort',
    'id' => 'natacao-4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 600x654)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbNatacao->add_field([
    'name' => 'Título 4 #cuidadosdogresort',
    'id' => 'titulo-natacao-4',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Descrição 4 #cuidadosdogresort',
    'id' => 'descricao-natacao-4',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbNatacao->add_field([
    'name' => 'Imagem 5 #cuidadosdogresort',
    'id' => 'natacao-5',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 600x659)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent = new_cmb2_box([
		'id' => 'prevent_box',
		'title' => 'DogPrevent',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-dogprevent.php',
		],
	]);

  $cmbPrevent->add_field([
    'name' => 'Logotipo Prevent',
    'id' => 'logotipo-prevent',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent->add_field([
    'name' => 'Título',
    'id' => 'titulo-prevent',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Descrição',
    'id' => 'descricao-prevent',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Imagem 1',
    'id' => 'prevent-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 300x273)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent->add_field([
    'name' => 'Imagem 2',
    'id' => 'prevent-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 300x258)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent->add_field([
    'name' => 'Imagem 3',
    'id' => 'prevent-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 300x223)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent->add_field([
    'name' => 'Título 2',
    'id' => 'titulo-prevent-2',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Descrição 2',
    'id' => 'descricao-prevent-2',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Imagem 4',
    'id' => 'prevent-4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 400x425)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent->add_field([
    'name' => 'Imagem 5',
    'id' => 'prevent-5',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 300x280)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent->add_field([
    'name' => 'Imagem 6',
    'id' => 'prevent-6',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 400x376)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent->add_field([
    'name' => 'Título 3',
    'id' => 'titulo-prevent-3',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Subtítulo 3',
    'id' => 'subtitulo-prevent-3',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Descrição 3',
    'id' => 'descricao-prevent-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Imagem 7',
    'id' => 'prevent-7',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 540x585)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent->add_field([
    'name' => 'Observação 3',
    'id' => 'obs-prevent-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => '#cuidadosdogresort',
    'id' => 'cuidadosdogresort-prevent-1',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => '#cuidadosdogresort Item 1',
    'id' => 'cuidadosdogresort-prevent-item-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => '#cuidadosdogresort Item 2',
    'id' => 'cuidadosdogresort-prevent-item-2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => '#cuidadosdogresort Item 3',
    'id' => 'cuidadosdogresort-prevent-item-3',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => '#cuidadosdogresort Item 4',
    'id' => 'cuidadosdogresort-prevent-item-4',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => '#cuidadosdogresort Item 5',
    'id' => 'cuidadosdogresort-prevent-item-5',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Título 4',
    'id' => 'titulo-prevent-4',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Descrição 4',
    'id' => 'descricao-prevent-4',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Atendimentos Veterinários Item 1',
    'id' => 'veterinario-item-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Atendimentos Veterinários Item 2',
    'id' => 'veterinario-item-2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Atendimentos Veterinários Item 3',
    'id' => 'veterinario-item-3',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Imagem 8',
    'id' => 'prevent-8',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 340x274)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent->add_field([
    'name' => 'Imagem 9',
    'id' => 'prevent-9',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 340x316)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbPrevent->add_field([
    'name' => 'Título 5',
    'id' => 'titulo-prevent-5',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Descrição 5',
    'id' => 'descricao-prevent-5',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Dogsenior/Dogspecial Item 1',
    'id' => 'dogsenior-item-1',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Dogsenior/Dogspecial Item 2',
    'id' => 'dogsenior-item-2',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Dogsenior/Dogspecial Item 3',
    'id' => 'dogsenior-item-3',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Dogsenior/Dogspecial Item 4',
    'id' => 'dogsenior-item-4',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Dogsenior/Dogspecial Item 5',
    'id' => 'dogsenior-item-5',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Descrição 6',
    'id' => 'descricao-prevent-6',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbPrevent->add_field([
    'name' => 'Imagem 10',
    'id' => 'prevent-10',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 500x545)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout = new_cmb2_box([
		'id' => 'about_box',
		'title' => 'Sobre',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-sobre.php',
		],
	]);

  $cmbAbout->add_field([
    'name' => 'Título',
    'id' => 'titulo-sobre',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Descrição',
    'id' => 'descricao-sobre',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Imagem 1',
    'id' => 'sobre-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 600x500)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'Subtítulo 1',
    'id' => 'subtitulo-sobre-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Imagem 2',
    'id' => 'sobre-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 600x444)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'Logo 1',
    'id' => 'sobre-logo-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 90x90)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'Subtítulo 2',
    'id' => 'subtitulo-sobre-2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Descrição 2',
    'id' => 'descricao-sobre-2',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Logo 2',
    'id' => 'sobre-logo-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 90x90)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'Subtítulo 3',
    'id' => 'subtitulo-sobre-3',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Descrição 3',
    'id' => 'descricao-sobre-3',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Logo 3',
    'id' => 'sobre-logo-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 90x90)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'Subtítulo 4',
    'id' => 'subtitulo-sobre-4',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Item 1',
    'id' => 'descricao-item-1',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Item 2',
    'id' => 'descricao-item-2',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Logo 4',
    'id' => 'sobre-logo-4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 90x90)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'Subtítulo 5',
    'id' => 'subtitulo-sobre-5',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Item 3',
    'id' => 'descricao-item-3',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Item 4',
    'id' => 'descricao-item-4',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Item 5',
    'id' => 'descricao-item-5',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Item 6',
    'id' => 'descricao-item-6',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Item 7',
    'id' => 'descricao-item-7',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbAbout->add_field([
    'name' => 'Item 8',
    'id' => 'descricao-item-8',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbRegras = new_cmb2_box([
		'id' => 'regras_box',
		'title' => 'Regras',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-regras.php',
		],
	]);

  $cmbRegras->add_field([
    'name' => 'Logotipo Regras',
    'id' => 'logotipo-regras',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbRegras->add_field([
    'name' => 'Pré-título',
    'id' => 'pre-titulo-regras',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Título',
    'id' => 'titulo-regras',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Regras Ícone 1',
    'id' => 'regras-icone-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 65x65)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 1',
    'id' => 'subtitulo-regras-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Convívio Item 1',
    'id' => 'convivio-item-1',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Convívio Item 2',
    'id' => 'convivio-item-2',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Convívio Item 3',
    'id' => 'convivio-item-3',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Regras Ícone 2',
    'id' => 'regras-icone-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 65x65)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 2',
    'id' => 'subtitulo-regras-2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Saúde Item 1',
    'id' => 'saude-item-1',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Saúde Item 2',
    'id' => 'saude-item-2',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Saúde Item 3',
    'id' => 'saude-item-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Saúde Item 4',
    'id' => 'saude-item-4',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Saúde Item 5',
    'id' => 'saude-item-5',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Regras Ícone 3',
    'id' => 'regras-icone-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 65x65)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 3',
    'id' => 'subtitulo-regras-3',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Descrição 1',
    'id' => 'descricao-1-regras',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Observação 1',
    'id' => 'obs-1-regras',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Regras Ícone 4',
    'id' => 'regras-icone-4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 65x65)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 4',
    'id' => 'subtitulo-regras-4',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Span 1',
    'id' => 'span-regras-1',
    'type' => 'text_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Descrição 2',
    'id' => 'descricao-regras-2',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Span 2',
    'id' => 'span-regras-2',
    'type' => 'text_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Descrição 3',
    'id' => 'descricao-regras-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Regras Ícone 5',
    'id' => 'regras-icone-5',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 65x65)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 5',
    'id' => 'subtitulo-regras-5',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Descrição 4',
    'id' => 'descricao-regras-4',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 6',
    'id' => 'subtitulo-regras-6',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 7',
    'id' => 'subtitulo-regras-7',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Descrição 5',
    'id' => 'descricao-regras-5',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 8',
    'id' => 'subtitulo-regras-8',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Descrição 6',
    'id' => 'descricao-regras-6',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 9',
    'id' => 'subtitulo-regras-9',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Descrição 7',
    'id' => 'descricao-regras-7',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 10',
    'id' => 'subtitulo-regras-10',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Descrição 8',
    'id' => 'descricao-regras-8',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Subtítulo 11',
    'id' => 'subtitulo-regras-11',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbRegras->add_field([
    'name' => 'Descrição 9',
    'id' => 'descricao-regras-9',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbContact = new_cmb2_box([
		'id' => 'contact_box',
		'title' => 'Fale Conosco',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-fale-conosco.php',
		],
	]);

  $cmbContact->add_field([
    'name' => 'Título',
    'id' => 'titulo-contato',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbContact->add_field([
    'name' => 'Endereço',
    'id' => 'endereco',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbContact->add_field([
    'name' => 'Número do Whatsapp (com DDD, sem parênteses, hífen ou espaços)',
    'id' => 'numero-whatsapp',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbContact->add_field([
    'name' => 'Número do Whatsapp (com DDD, parênteses, hífen e espaços)',
    'id' => 'numero-whatsapp-pretty',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbContact->add_field([
    'name' => 'Número do Telefone (com DDD, sem parênteses, hífen ou espaços)',
    'id' => 'numero-telefone',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbContact->add_field([
    'name' => 'Número do Telefone (com DDD, parênteses, hífen e espaços)',
    'id' => 'numero-telefone-pretty',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbContact->add_field([
    'name' => 'E-mail',
    'id' => 'email',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbContact->add_field([
    'name' => 'Link Facebook',
    'id' => 'facebook',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbContact->add_field([
    'name' => 'Link Instagram',
    'id' => 'instagram',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbContact->add_field([
    'name' => 'Link Tiktok',
    'id' => 'tiktok',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbContact->add_field([
    'name' => 'Link Google Maps',
    'id' => 'maps',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbTestimonials = new_cmb2_box([
		'id' => 'testimonials_box',
		'title' => 'Depoimentos',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-depoimentos.php',
		],
	]);

  $cmbTestimonials->add_field([
    'name' => 'Título',
    'id' => 'titulo-depoimentos',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $itens_depoimentos = $cmbTestimonials->add_field([
    'name' => 'Depoimentos',
    'id' => 'itens-depoimentos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Depoimento {#}',
      'add_button' => 'Adicionar Depoimento',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbTestimonials->add_group_field($itens_depoimentos, [
    'name' => 'Imagem',
    'id' => 'imagem-depoimento',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 300x300)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbTestimonials->add_group_field($itens_depoimentos, [
    'name' => 'Cliente',
    'id' => 'cliente-depoimento',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbTestimonials->add_group_field($itens_depoimentos, [
    'name' => 'Depoimento',
    'id' => 'depoimento-depoimento',
    'type' => 'textarea',
    'sanitization_cb' => false,
  ]);

  $cmbTeam = new_cmb2_box([
		'id' => 'team_box',
		'title' => 'Equipe',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-equipe.php',
		],
	]);

  $cmbTeam->add_field([
    'name' => 'Título',
    'id' => 'titulo-equipe',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbTeam->add_field([
    'name' => 'Descrição',
    'id' => 'descricao-equipe',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $itens_proprietarios = $cmbTeam->add_field([
    'name' => 'Proprietários',
    'id' => 'itens-proprietarios',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Proprietário {#}',
      'add_button' => 'Adicionar Proprietário',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbTeam->add_group_field($itens_proprietarios, [
    'name' => 'Imagem',
    'id' => 'imagem-proprietario',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 300x300)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbTeam->add_group_field($itens_proprietarios, [
    'name' => 'Nome',
    'id' => 'nome-proprietario',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbTeam->add_group_field($itens_proprietarios, [
    'name' => 'Descrição',
    'id' => 'descricao-proprietario',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $itens_administrativo = $cmbTeam->add_field([
    'name' => 'Equipe Administrativa',
    'id' => 'itens-administrativo',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Funcionário {#}',
      'add_button' => 'Adicionar Funcionário',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbTeam->add_group_field($itens_administrativo, [
    'name' => 'Imagem',
    'id' => 'imagem-administrativo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 300x300)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbTeam->add_group_field($itens_administrativo, [
    'name' => 'Nome',
    'id' => 'nome-administrativo',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbTeam->add_group_field($itens_administrativo, [
    'name' => 'Função',
    'id' => 'funcao-administrativo',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbTeam->add_group_field($itens_administrativo, [
    'name' => 'Descrição',
    'id' => 'descricao-administrativo',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $itens_recreacao = $cmbTeam->add_field([
    'name' => 'Equipe de Recreação',
    'id' => 'itens-recreacao',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Funcionário {#}',
      'add_button' => 'Adicionar Funcionário',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbTeam->add_group_field($itens_recreacao, [
    'name' => 'Imagem',
    'id' => 'imagem-recreacao',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 300x300)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbTeam->add_group_field($itens_recreacao, [
    'name' => 'Nome',
    'id' => 'nome-recreacao',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbTeam->add_group_field($itens_recreacao, [
    'name' => 'Função',
    'id' => 'funcao-recreacao',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbTeam->add_group_field($itens_recreacao, [
    'name' => 'Descrição',
    'id' => 'descricao-recreacao',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $itens_terceirizados = $cmbTeam->add_field([
    'name' => 'Terceirizados',
    'id' => 'itens-terceirizados',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Terceirizado {#}',
      'add_button' => 'Adicionar Terceirizado',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbTeam->add_group_field($itens_terceirizados, [
    'name' => 'Imagem',
    'id' => 'imagem-terceirizados',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 300x300)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbTeam->add_group_field($itens_terceirizados, [
    'name' => 'Nome',
    'id' => 'nome-terceirizados',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbTeam->add_group_field($itens_terceirizados, [
    'name' => 'Função',
    'id' => 'funcao-terceirizados',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbTeam->add_group_field($itens_terceirizados, [
    'name' => 'Descrição',
    'id' => 'descricao-terceirizados',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $itens_parcerias = $cmbTeam->add_field([
    'name' => 'Parcerias',
    'id' => 'itens-parcerias',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Parceria {#}',
      'add_button' => 'Adicionar Parceria',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbTeam->add_group_field($itens_parcerias, [
    'name' => 'Imagem',
    'id' => 'imagem-parcerias',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 300x300)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbTeam->add_group_field($itens_parcerias, [
    'name' => 'Nome',
    'id' => 'nome-parcerias',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbTeam->add_group_field($itens_parcerias, [
    'name' => 'Descrição',
    'id' => 'descricao-parcerias',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities = new_cmb2_box([
		'id' => 'facilities_box',
		'title' => 'Estrutura',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-estrutura.php',
		],
	]);

  $cmbFacilities->add_field([
    'name' => 'Título',
    'id' => 'titulo-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição',
    'id' => 'descricao-estrutura',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Subtítulo',
    'id' => 'subtitulo-estrutura',
    'type' => 'text',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Introdução Item 1',
    'id' => 'intro-item-1-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Introdução Item 2',
    'id' => 'intro-item-2-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Introdução Item 3',
    'id' => 'intro-item-3-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Introdução Item 4',
    'id' => 'intro-item-4-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Introdução Item 5',
    'id' => 'intro-item-5-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Introdução Item 6',
    'id' => 'intro-item-6-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Introdução Item 7',
    'id' => 'intro-item-7-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Introdução Item 8',
    'id' => 'intro-item-8-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Introdução Item 9',
    'id' => 'intro-item-9-estrutura',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 1',
    'id' => 'estrutura-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 500x464)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 2',
    'id' => 'estrutura-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 400x323)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 3',
    'id' => 'estrutura-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 380x405)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 4',
    'id' => 'estrutura-4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 500x313)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 5',
    'id' => 'estrutura-5',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 340x320)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Logotipo Estrutura 1',
    'id' => 'logotipo-estrutura-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Título 1 Estrutura 1',
    'id' => 'titulo-1-estrutura-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 1 Estrutura 1',
    'id' => 'descricao-1-estrutura-1',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 1 Estrutura 1',
    'id' => 'imagem-1-estrutura-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x392)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 2 Estrutura 1',
    'id' => 'imagem-2-estrutura-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x448)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Título 2 Estrutura 1',
    'id' => 'titulo-2-estrutura-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Item 1 Estrutura 1',
    'id' => 'item-1-estrutura-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Item 2 Estrutura 1',
    'id' => 'item-2-estrutura-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Item 3 Estrutura 1',
    'id' => 'item-3-estrutura-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Item 4 Estrutura 1',
    'id' => 'item-4-estrutura-1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 3 Estrutura 1',
    'id' => 'imagem-3-estrutura-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x411)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 2 Estrutura 1',
    'id' => 'descricao-2-estrutura-1',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Logotipo Estrutura 2',
    'id' => 'logotipo-estrutura-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Título 1 Estrutura 2',
    'id' => 'titulo-1-estrutura-2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 1 Estrutura 2',
    'id' => 'descricao-1-estrutura-2',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 1 Estrutura 2',
    'id' => 'imagem-1-estrutura-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x448)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 2 Estrutura 2',
    'id' => 'imagem-2-estrutura-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x374)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Título 2 Estrutura 2',
    'id' => 'titulo-2-estrutura-2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 2 Estrutura 2',
    'id' => 'descricao-2-estrutura-2',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 3 Estrutura 2',
    'id' => 'imagem-3-estrutura-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x371)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Logotipo Estrutura 3',
    'id' => 'logotipo-estrutura-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Título 1 Estrutura 3',
    'id' => 'titulo-1-estrutura-3',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 1 Estrutura 3',
    'id' => 'descricao-1-estrutura-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 1 Estrutura 3',
    'id' => 'imagem-1-estrutura-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x383)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 2 Estrutura 3',
    'id' => 'imagem-2-estrutura-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x389)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Título 2 Estrutura 3',
    'id' => 'titulo-2-estrutura-3',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 2 Estrutura 3',
    'id' => 'descricao-2-estrutura-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 3 Estrutura 3',
    'id' => 'imagem-3-estrutura-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x335)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 3 Estrutura 3',
    'id' => 'descricao-3-estrutura-3',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Logotipo Estrutura 4',
    'id' => 'logotipo-estrutura-4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Título 1 Estrutura 4',
    'id' => 'titulo-1-estrutura-4',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 1 Estrutura 4',
    'id' => 'descricao-1-estrutura-4',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 1 Estrutura 4',
    'id' => 'imagem-1-estrutura-4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x446)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 2 Estrutura 4',
    'id' => 'imagem-2-estrutura-4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x434)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Título 2 Estrutura 4',
    'id' => 'titulo-2-estrutura-4',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 2 Estrutura 4',
    'id' => 'descricao-2-estrutura-4',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 3 Estrutura 4',
    'id' => 'imagem-3-estrutura-4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x351)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 3 Estrutura 4',
    'id' => 'descricao-3-estrutura-4',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Logotipo Estrutura 5',
    'id' => 'logotipo-estrutura-5',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 200x200)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Título 1 Estrutura 5',
    'id' => 'titulo-1-estrutura-5',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 1 Estrutura 5',
    'id' => 'descricao-1-estrutura-5',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 1 Estrutura 5',
    'id' => 'imagem-1-estrutura-5',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 438x393)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 2 Estrutura 5',
    'id' => 'imagem-2-estrutura-5',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x492)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Título 2 Estrutura 5',
    'id' => 'titulo-2-estrutura-5',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 2 Estrutura 5',
    'id' => 'descricao-2-estrutura-5',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

  $cmbFacilities->add_field([
    'name' => 'Imagem 3 Estrutura 5',
    'id' => 'imagem-3-estrutura-5',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Adicionar Arquivo (ideal: 460x300)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbFacilities->add_field([
    'name' => 'Descrição 3 Estrutura 5',
    'id' => 'descricao-3-estrutura-5',
    'type' => 'textarea_small',
    'sanitization_cb' => false,
  ]);

}

?>