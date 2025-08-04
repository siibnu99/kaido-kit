<?php

declare(strict_types=1);

return [
    'dashboard' => [
        'title' => 'Log Viewer',
    ],
    'show' => [
        'title' => 'Lihat log :log',
    ],
    'navigation' => [
        'group' => 'Log',
        'label' => 'Log Viewer',
        'sort' => 100,
    ],
    'table' => [
        'columns' => [
            'date' => [
                'label' => 'Tanggal',
            ],
            'level' => [
                'label' => 'Level',
            ],
            'message' => [
                'label' => 'Pesan',
            ],
        ],
        'actions' => [
            'view' => [
                'label' => 'Lihat',
            ],
            'download' => [
                'label' => 'Unduh log :log',
                'bulk' => [
                    'label' => 'Unduh log',
                    'error' => 'Terjadi kesalahan saat mengunduh log',
                ],
            ],
            'delete' => [
                'label' => 'Hapus log :log',
                'success' => 'Log berhasil dihapus',
                'error' => 'Terjadi kesalahan saat menghapus log',
                'bulk' => [
                    'label' => 'Hapus log terpilih',
                ],
            ],
            'close' => [
                'label' => 'Kembali',
            ],
        ],
        'detail' => [
            'title' => 'Detail',
            'file_path' => 'Lokasi File',
            'log_entries' => 'Entri',
            'size' => 'Ukuran',
            'created_at' => 'Dibuat pada',
            'updated_at' => 'Diperbarui pada',
        ],
    ],
    'levels' => [
        'all' => 'Semua',
        'emergency' => 'Emergency',
        'alert' => 'Alert',
        'critical' => 'Critical',
        'error' => 'Error',
        'warning' => 'Warning',
        'notice' => 'Notice',
        'info' => 'Info',
        'debug' => 'Debug',
    ],
];
