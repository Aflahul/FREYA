<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PegawaiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->level === 'admin') {
            // Jika yang mencoba mengakses adalah admin, lanjutkan dengan request berikutnya.
            return $next($request);
        }

        if (auth()->check() && auth()->user()->level === 'pegawai') {
            // Jika yang mencoba mengakses adalah pegawai, tampilkan alert dan konfirmasi beralih akun.
            echo '<script>';
            echo 'if (confirm("Halaman ini hanya dapat diakses oleh admin. Apakah Anda ingin beralih ke akun admin?")) {';
            echo 'window.location.href = "/login";'; // Redirect ke halaman login jika pegawai ingin beralih akun.
            echo '} else {';
            echo 'history.back();'; // Kembali ke halaman sebelumnya jika pegawai memilih "Cancel" atau "Tutup".
            echo '}';
            echo '</script>';

            // Hentikan request untuk mencegah lanjutan eksekusi middleware atau controller.
            exit;
        }

        // Jika belum login atau level tidak terdeteksi, redirect ke halaman login.
        return redirect('/login');
    }
}
