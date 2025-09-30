<?php
return [
    'routes' => [
        // Customer
        'pre-order' => 'Dashboard/pages/customer/pre-order.html',
        'renew' => 'Dashboard/pages/customer/renew.html',
        'waiting-list' => 'Dashboard/pages/customer/waiting-list.html',
        'aktif' => 'Dashboard/pages/customer/aktif.html',
        'cancelled' => 'Dashboard/pages/customer/cancelled.html',
        'account-tambah' => 'Dashboard/pages/customer/tambah-akun.html',
        'tambah-ke-group' => 'Dashboard/pages/customer/tambah-ke-group.html',

        


        // Groups
        'groups' => 'Dashboard/pages/groups/groups.html',
        'group-tambah' => 'Dashboard/pages/groups/group-tambah.html',
        'group-edit' => 'Dashboard/pages/groups/group-edit.html',
        'group-detail' => 'Dashboard/pages/groups/group-detail.html',
        'group-member' => 'Dashboard/pages/groups/group-member.html',
        'group-host-tambah' => 'Dashboard/pages/groups/group-host-tambah.html',
        'group-delete' => 'Dashboard/pages/groups/group-delete.html',
        'expired-account' => 'Dashboard/pages/groups/expired-account.html',
        'expired-account-perbarui' => 'Dashboard/pages/groups/expired-account-perbarui.html',

        'expired-3-days' => 'Dashboard/pages/groups/expired-3-days.html',
        'expired-7-days' => 'Dashboard/pages/groups/expired-7-days.html',

        // Provider
        'kategori-provider' => 'Dashboard/pages/provider/kategori-provider.html',
        'kategori-provider-tambah' => 'Dashboard/pages/provider/kategori-provider-tambah.html',
        'kategori-provider-edit' => 'Dashboard/pages/provider/kategori-provider-edit.html',
        'kategori-provider-delete' => 'Dashboard/pages/provider/kategori-provider-delete.html',
        'provider' => 'Dashboard/pages/provider/provider.html',
        'provider-tambah' => 'Dashboard/pages/provider/provider-tambah.html',
        'provider-edit' => 'Dashboard/pages/provider/provider-edit.html',
        'provider-delete' => 'Dashboard/pages/provider/provider-delete.html',
        'provider-detail' => 'Dashboard/pages/provider/provider-detail.html',
        'provider-paket-tambah' => 'Dashboard/pages/provider/provider-paket-tambah.html',

        // Employee
        'employee' => 'Dashboard/pages/employee/employee.html',
        'employee-tambah' => 'Dashboard/pages/employee/employee-tambah.html',
        'employee-detail' => 'Dashboard/pages/employee/employee-detail.html',
        'employee-edit' => 'Dashboard/pages/employee/employee-edit.html',
    ],

    'breadcrumbs' => [
        // Customer
        'pre-order' => 'Customer > Pre Order',
        'renew' => 'Customer > Renew',
        'waiting-list' => 'Customer > Waiting List',
        'aktif' => 'Customer > Aktif',
        'cancelled' => 'Customer > Cancelled',
        'account-tambah' => 'Akun > Tambah',
        'tambah-ke-group' => 'Customer > Tambah ke Group',

        // Groups
        'groups' => 'Groups & Accounts > Groups',
        'group-tambah' => 'Groups & Accounts > Tambah Group',
        'group-edit' => 'Groups & Accounts > Edit Group',
        'group-detail' => 'Groups & Accounts > Detail Group',
        'group-member' => 'Groups & Accounts > Daftar Member',
        'group-host-tambah' => 'Groups & Accounts > Tambah Akun Host',
        'group-delete' => 'Groups & Accounts > Hapus Group',
        'expired-account' => 'Groups & Accounts > Expired Account',
        'expired-account-perbarui' => 'Groups & Accounts > Expired Account > Perbarui',
        'expired-3-days' => 'Groups & Accounts > Expired in 3 Days',
        'expired-7-days' => 'Groups & Accounts > Expired in 7 Days',

        // Provider
        'kategori-provider' => 'Provider > Kategori Provider',
        'kategori-provider-tambah' => 'Provider > Kategori Provider > Tambah',
        'kategori-provider-edit' => 'Provider > Kategori Provider > Edit',
        'kategori-provider-delete' => 'Provider > Kategori Provider > Hapus',
        'provider' => 'Provider > Provider',
        'provider-tambah' => 'Provider > Tambah',
        'provider-edit' => 'Provider > Edit',
        'provider-delete' => 'Provider > Hapus',
        'provider-detail' => 'Provider > Detail',
        'provider-paket-tambah' => 'Provider > Paket > Tambah',

        // Employee
        'employee' => 'Employee',
        'employee-tambah' => 'Employee > Tambah',
        'employee-detail' => 'Employee > Detail',
        'employee-edit' => 'Employee > Edit',
    ],
];
