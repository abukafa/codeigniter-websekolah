<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profil', 'Home::profile');
$routes->get('/prakata', 'Home::foreword');
$routes->get('/program', 'Home::program');
$routes->get('/pengajar', 'Home::pengajar');
$routes->get('/pengajar/(:num)', 'Home::pengajar/$1');
$routes->get('/info', 'Home::info');
$routes->get('/kalender', 'Home::kalender');
$routes->get('/jadwal', 'Home::Jadwal');
$routes->get('/absensi', 'Home::absensi');
$routes->get('/blog', 'Home::blog');
$routes->get('/blog/(:any)', 'Home::detail/$1');
$routes->get('/galeri', 'Home::galeri');
$routes->get('/siswa', 'Home::siswa');
$routes->get('/siswa/(:any)', 'Home::siswa/$1');
$routes->get('/siswa/(:any)/(:num)', 'Home::siswa/$1/$2');
$routes->get('/alumni', 'Home::alumni');
$routes->get('/alumni/(:any)', 'Home::alumni/$1');
$routes->get('/alumni/(:any)/(:num)', 'Home::alumni/$1/$2');
$routes->get('/pooling/(:num)', 'Home::pooling/$1');

$routes->get('/admin', 'Login::admin');
$routes->get('/member', 'Login::member');
$routes->post('/admin', 'Login::loginAdmin');
$routes->post('/member', 'Login::loginMember');
$routes->get('/logout', 'Login::logout');

$routes->get('/dashboard', 'OfficeDashboard::index');
$routes->get('/admin/profil', 'OfficeDashboard::profil');
$routes->post('/admin/profil', 'OfficeDashboard::save');

$routes->get('/admin/mem-kom/(:num)', 'OfficeMember::memkom/$1');
$routes->get('/admin/member', 'OfficeMember::get');
$routes->get('/admin/member/(:num)', 'OfficeMember::get/$1');
$routes->get('/admin/guru', 'OfficeMember::guru');
$routes->get('/admin/guru/(:any)', 'OfficeMember::guru/$1');
$routes->get('/admin/siswa', 'OfficeMember::siswa');
$routes->get('/admin/siswa/(:num)', 'OfficeMember::siswa/$1');
$routes->get('/admin/biodata/(:num)', 'MemberBiodata::index/$1');
$routes->post('/admin/biodata', 'MemberBiodata::save');
$routes->post('/admin/biodata/(:num)', 'MemberBiodata::save/$1');
$routes->delete('/admin/biodata/(:num)', 'MemberBiodata::delete/$1');

$routes->get('/admin/kalender', 'OfficeKalender::index');
$routes->get('/admin/kalender/(:num)', 'OfficeKalender::get/$1');
$routes->post('/admin/kalender', 'OfficeKalender::save');
$routes->post('/admin/kalender/(:num)', 'OfficeKalender::save/$1');
$routes->delete('/admin/kalender/(:num)', 'OfficeKalender::delete/$1');
$routes->get('/admin/jadwal', 'OfficeKalender::jadwal');

$routes->get('/admin/laporan', 'OfficeLaporan::index');

$routes->post('/admin/rekap/absensi', 'AdminRekap::absensi');

$routes->get('/admin/pengguna', 'OfficeUser::index');
$routes->get('/admin/pengguna/(:num)', 'OfficeUser::get/$1');
$routes->post('/admin/pengguna/', 'OfficeUser::insert');
$routes->post('/admin/pengguna/(:num)', 'OfficeUser::update/$1');
$routes->delete('/admin/pengguna/(:num)', 'OfficeUser::delete/$1');
$routes->get('/password', 'OfficeUser::changePass');
$routes->post('/password/update', 'OfficeUser::updatePass');

$routes->get('/member/biodata/(:num)', 'MemberBiodata::index/$1');
$routes->post('/member/biodata/(:num)', 'MemberBiodata::save/$1');

$routes->get('/member/kompetensi', 'MemberKompetensi::index');
$routes->post('/member/kompetensi', 'MemberKompetensi::save');
$routes->post('/member/kompetensi/(:num)', 'MemberKompetensi::save/$1');
$routes->delete('/member/kompetensi/(:num)', 'MemberKompetensi::delete/$1');
$routes->get('/member/kompetensi-get/(:num)', 'MemberKompetensi::get/$1');
$routes->get('/member/kompetensi-get-idm/(:num)', 'MemberKompetensi::getByIdm/$1');
$routes->get('/member/kompetensi/(:num)', 'MemberKompetensi::member/$1');

$routes->get('/member/nilai', 'MemberNilai::index');
$routes->get('/member/nilai/(:num)', 'MemberNilai::siswa/$1');

$routes->get('/data/absensi', 'AdminAbsensi::index');
$routes->get('/data/absensi-get-idm/(:any)', 'AdminAbsensi::getByIdm/$1');
$routes->get('/data/absensi/(:any)', 'AdminAbsensi::index/$1');
$routes->post('/data/absen/(:num)', 'AdminAbsensi::absen/$1');
$routes->get('/data/ceklis/(:any)/(:num)', 'AdminAbsensi::ceklis/$1/$2');

$routes->get('/data/blog', 'AdminBlog::index');
$routes->get('/data/blog/(:num)', 'AdminBlog::detail/$1');
$routes->get('/data/blog-get/(:num)', 'AdminBlog::get/$1');
$routes->post('/data/blog/(:num)', 'AdminBlog::save/$1');
$routes->delete('/data/blog/(:num)', 'AdminBlog::delete/$1');
$routes->get('/data/publish/(:num)', 'AdminBlog::publish/$1');
$routes->post('/data/save/(:num)', 'AdminBlog::saveToGaleri/$1');

$routes->get('/data/galeri', 'AdminGaleri::index');

$routes->get('/data/info', 'AdminInfo::index');
$routes->post('/data/info', 'AdminInfo::save');
$routes->post('/data/info/(:num)', 'AdminInfo::save/$1');
$routes->get('/data/info/(:num)', 'AdminInfo::get/$1');
$routes->delete('/data/info/(:num)', 'AdminInfo::delete/$1');
$routes->post('/data/info-prior/(:num)', 'AdminInfo::prioritas/$1');