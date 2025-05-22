<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KolProdiController;
use App\Http\Controllers\KolJurusanController;
use App\Http\Controllers\KolJurusanSekolahController;
use App\Http\Controllers\KolJkController;
use App\Http\Controllers\KolKabupatenController;
use App\Http\Controllers\KolProvinsiController;
use App\Http\Controllers\KolWilayahController;
use App\Http\Controllers\KolStatusHidupController;
use App\Http\Controllers\KolAgamaController;
use App\Http\Controllers\KolDarahController;
use App\Http\Controllers\KolPekerjaanController;
use App\Http\Controllers\KolPenghasilanController;
use App\Http\Controllers\KolStatusSipilController;
// Routes untuk kol_* (master data)
Route::apiResource('kol-prodi', KolProdiController::class);
Route::apiResource('kol-jurusan', KolJurusanController::class);
Route::apiResource('kol-jurusan-sekolah', KolJurusanSekolahController::class);
Route::apiResource('kol-jk', KolJkController::class);
Route::apiResource('kol-kabupaten', KolKabupatenController::class);
Route::apiResource('kol-provinsi', KolProvinsiController::class);
Route::apiResource('kol-wilayah', KolWilayahController::class);
Route::apiResource('kol-status-hidup', KolStatusHidupController::class);

Route::apiResource('kol-hubungan', KolHubunganController::class);
Route::apiResource('kol-agama', KolAgamaController::class);
Route::apiResource('kol-darah', KolDarahController::class);
Route::apiResource('kol-pekerjaan', KolPekerjaanController::class);
Route::apiResource('kol-penghasilan', KolPenghasilanController::class);
Route::apiResource('kol-status-sipil', KolStatusSipilController::class);
Route::apiResource('kol-hubungan', KolHubunganController::class);

Route::apiResource('asal-sekolah', AsalSekolahController::class);
Route::apiResource('bebas-yudisium', BebasYudisiumController::class);
Route::apiResource('bidang-sekolah', BidangSekolahController::class);
Route::apiResource('bulan', BulanController::class);
Route::apiResource('jalur-pmb', JalurPmbController::class);
Route::apiResource('jenis-aktifitas', JenisAktifitasController::class);
Route::apiResource('jenis-evaluasi', JenisEvaluasiController::class);
Route::apiResource('jenis-mk', JenisMkController::class);
Route::apiResource('jenis-sekolah', JenisSekolahController::class);
Route::apiResource('jenis-sk', JenisSkController::class);
Route::apiResource('jenis-surat-online', JenisSuratOnlineController::class);
Route::apiResource('jenjang-politeknik', JenjangPoliteknikController::class);

Route::apiResource('pilihanprodi-sbmpn', PilihanProdiSbmpnController::class);
Route::apiResource('politeknik', PoliteknikController::class);
Route::apiResource('prodi-politeknik', ProdiPoliteknikController::class);
Route::apiResource('program-sekolah', ProgramSekolahController::class);
Route::apiResource('skema-lsp', SkemaLspController::class);
Route::apiResource('status', StatusController::class);
Route::apiResource('status-kalender', StatusKalenderController::class);
Route::apiResource('status-keluarga', StatusKeluargaController::class);
Route::apiResource('status-struktural', StatusStrukturalController::class);
Route::apiResource('terminal', TerminalController::class);
Route::apiResource('pilihan-prodi', PilihanProdiController::class);