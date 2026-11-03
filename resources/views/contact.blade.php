@extends('layouts.app')
@section('title', 'Cara Pemesanan | Divija')

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>Cara Pemesanan</h1>
            <p class="lead">Pemesanan dilakukan melalui WhatsApp. Situs ini bersifat informatif dan tidak menerima transaksi langsung.</p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="wrap contact">
            <ol class="steps">
                <li>
                    <span class="steps__number">1</span>
                    <div>
                        <h2>Pilih produk</h2>
                        <p>Tentukan produk, ukuran, dan rasa yang Anda inginkan dari daftar menu.</p>
                    </div>
                </li>
                <li>
                    <span class="steps__number">2</span>
                    <div>
                        <h2>Kirim pesanan via WhatsApp</h2>
                        <p>Sampaikan produk dan jumlah botol yang ingin dipesan.</p>
                    </div>
                </li>
                <li>
                    <span class="steps__number">3</span>
                    <div>
                        <h2>Terima konfirmasi</h2>
                        <p>Tim Divija akan mengonfirmasi total biaya dan estimasi waktu pesanan siap.</p>
                    </div>
                </li>
            </ol>

            <aside class="contact-card">
                <h2 class="small-heading">Hubungi Divija</h2>
                <dl>
                    <dt>WhatsApp</dt>
                    <dd><a href="https://wa.me/6289525773195" target="_blank" rel="noopener">0895-2577-3195</a></dd>

                    <dt>Instagram</dt>
                    <dd><a href="https://instagram.com/divija.collection" target="_blank" rel="noopener">@divija.collection</a></dd>
                </dl>
                <a href="https://wa.me/6289525773195?text=Halo%20Divija%2C%20saya%20ingin%20memesan%20produk%20Anda." class="btn" target="_blank" rel="noopener">Hubungi via WhatsApp</a>
            </aside>
        </div>
    </section>
@endsection
