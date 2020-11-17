<?php

return [

    'bill_number'           => 'Número de factura',
    'bill_date'             => 'Data de factura',
    'total_price'           => 'Total',
    'due_date'              => 'Data de venciment',
    'order_number'          => 'Número de comanda',
    'bill_from'             => 'Factura de compra de',

    'quantity'              => 'Quantitat',
    'price'                 => 'Preu',
    'sub_total'             => 'Subtotal',
    'discount'              => 'Descompte',
    'item_discount'         => 'Descompte de línia',
    'tax_total'             => 'Total impostos',
    'total'                 => 'Total',

    'item_name'             => 'Nom de l\'article|Nom dels articles',

    'show_discount'         => ':discount% de descompte',
    'add_discount'          => 'Afegeix descompte',
    'discount_desc'         => 'del subtotal',

    'payment_due'           => 'Data límit de pagament',
    'amount_due'            => 'Quantitat a pagar',
    'paid'                  => 'Pagat',
    'histories'             => 'Històries',
    'payments'              => 'Pagaments',
    'add_payment'           => 'Afegeix pagament',
    'mark_paid'             => 'Marca com a pagat',
    'mark_received'         => 'Marca com a rebut',
    'mark_cancelled'        => 'Marca com a cancel·lat',
    'download_pdf'          => 'Descarrega el PDF',
    'send_mail'             => 'Envia correu electrònic',
    'create_bill'           => 'Crea factura de proveïdor',
    'receive_bill'          => 'Rep factura de proveïdor',
    'make_payment'          => 'Paga',

    'statuses' => [
        'draft'             => 'Esborrany',
        'received'          => 'Rebut',
        'partial'           => 'Parcial',
        'paid'              => 'Pagat',
        'overdue'           => 'Vençut',
        'unpaid'            => 'Impagat',
        'cancelled'         => 'Cancel·lat',
    ],

    'messages' => [
        'marked_received'   => 'Factura de compra marcada com a rebuda',
        'marked_paid'       => 'Factura de compra marcada com a pagada',
        'marked_cancelled'  => 'Factura de compra marcada com cancel·lada!',
        'draft'             => 'Això és un <b>ESBORRANT</b> de factura de compra. Els canvis es veuran als gràfics un cop sigui marcada com a rebuda.',

        'status' => [
            'created'       => 'Creada el :date',
            'receive' => [
                'draft'     => 'No s\'ha enviat',
                'received'  => 'Rebuda el :date',
            ],
            'paid' => [
                'await'     => 'Pagament pendent',
            ],
        ],
    ],

];
