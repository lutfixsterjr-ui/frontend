<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONFIGURATION SPEC | TURISMO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --porsche-red: #d5001c;
            --porsche-grey: #f2f2f2;
            --text-main: #191919;
        }

        body {
            margin: 0;
            background: #f5f5f5;
            color: var(--text-main);
            font-family: 'Inter', sans-serif;
        }

        .print-actions {
            display: flex;
            justify-content: center;
            gap: 12px;
            padding: 28px 16px 0;
        }

        .btn-luxury {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 44px;
            padding: 12px 22px;
            border: 1px solid #000;
            border-radius: 2px;
            background: #000;
            color: #fff;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-decoration: none;
            text-transform: uppercase;
            transition: .2s;
        }

        .btn-luxury:hover { background: var(--porsche-red); border-color: var(--porsche-red); color: #fff; }
        .btn-luxury-light { background: #fff; color: #000; }
        .btn-luxury-light:hover { background: #eee; border-color: #000; color: #000; }

        .spec-sheet {
            width: min(100% - 32px, 1000px);
            margin: 28px auto 60px;
            padding: 54px 60px;
            background: #fff;
            box-shadow: 0 12px 40px rgba(0, 0, 0, .08);
        }

        .sheet-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 24px;
            padding-bottom: 28px;
            border-bottom: 1px solid #dedede;
        }

        .brand {
            font-size: 20px;
            font-weight: 800;
            letter-spacing: 5px;
        }

        .brand-caption,
        .sheet-reference,
        .meta-label {
            color: #888;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .sheet-reference { padding-top: 7px; text-align: right; }

        .sheet-title {
            margin: 34px 0 8px;
            font-size: clamp(25px, 4vw, 38px);
            font-weight: 800;
            letter-spacing: -1.5px;
            text-transform: uppercase;
        }

        .sheet-description { margin: 0; color: #777; font-size: 13px; }

        .sheet-meta {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
            margin: 30px 0 36px;
            padding: 20px;
            background: var(--porsche-grey);
        }

        .meta-value { margin-top: 6px; font-size: 12px; font-weight: 700; }

        .spec-table {
            width: 100%;
            border-collapse: collapse;
        }

        .spec-table th {
            padding: 13px 10px;
            border-bottom: 1px solid #111;
            color: #777;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1.2px;
            text-align: left;
            text-transform: uppercase;
        }

        .spec-table td {
            padding: 18px 10px;
            border-bottom: 1px solid #e8e8e8;
            font-size: 12px;
            vertical-align: middle;
        }

        .spec-table .text-end { text-align: right; white-space: nowrap; }
        .model-cell { display: flex; align-items: center; gap: 14px; min-width: 220px; }

        .model-image {
            width: 86px;
            height: 60px;
            flex: 0 0 auto;
            object-fit: contain;
            background: var(--porsche-grey);
        }

        .model-placeholder {
            width: 86px;
            height: 60px;
            display: grid;
            flex: 0 0 auto;
            place-items: center;
            background: var(--porsche-grey);
            color: #999;
            font-size: 20px;
        }

        .model-name { font-weight: 800; text-transform: uppercase; }
        .model-category { margin-top: 5px; color: #888; font-size: 9px; letter-spacing: 1px; text-transform: uppercase; }
        .qty-value { font-weight: 700; }

        .spec-table tfoot td {
            padding-top: 22px;
            border-bottom: 0;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .total-value { color: var(--porsche-red); font-size: 20px !important; letter-spacing: 0 !important; }

        .sheet-footer {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 38px;
            padding-top: 18px;
            border-top: 1px solid #dedede;
            color: #888;
            font-size: 9px;
            letter-spacing: .5px;
        }

        @media (max-width: 600px) {
            .spec-sheet { padding: 30px 20px; }
            .sheet-header { flex-direction: column; }
            .sheet-reference { text-align: left; }
            .spec-table th, .spec-table td { padding-right: 5px; padding-left: 5px; }
            .model-cell { min-width: 155px; gap: 8px; }
            .model-image, .model-placeholder { width: 58px; height: 48px; }
            .sheet-footer { flex-direction: column; }
        }

        @page { size: A4; margin: 14mm; }

        @media print {
            body { background: #fff; print-color-adjust: exact; -webkit-print-color-adjust: exact; }
            .no-print { display: none !important; }
            .spec-sheet {
                width: 100%;
                max-width: none;
                margin: 0;
                padding: 0;
                box-shadow: none;
            }
            .sheet-meta, .model-image, .model-placeholder, .total-value { print-color-adjust: exact; -webkit-print-color-adjust: exact; }
            .spec-table tr { break-inside: avoid; }
        }
    </style>
</head>
<body>
    <div class="print-actions no-print">
        <a href="{{ route('cart.index') }}" class="btn-luxury btn-luxury-light">
            <i class="bi bi-arrow-left"></i> Kembali ke konfigurasi
        </a>
        <button type="button" onclick="window.print()" class="btn-luxury">
            <i class="bi bi-printer"></i> Cetak / Simpan PDF
        </button>
    </div>

    <main class="spec-sheet">
        <header class="sheet-header">
            <div>
                <div class="brand">TURISMO</div>
                <div class="brand-caption">Premium automotive collection</div>
            </div>
            <div class="sheet-reference">Vehicle specification<br>Customer copy</div>
        </header>

        <section aria-labelledby="sheet-title">
            <h1 class="sheet-title" id="sheet-title">Your Configuration</h1>
            <p class="sheet-description">Ringkasan model pilihan Anda dari koleksi TURISMO.</p>
        </section>

        <div class="sheet-meta">
            <div>
                <div class="meta-label">Prepared for</div>
                <div class="meta-value">{{ Auth::user()->name }}</div>
            </div>
            <div>
                <div class="meta-label">Specification date</div>
                <div class="meta-value">{{ now()->format('d M Y, H:i') }}</div>
            </div>
        </div>

        <table class="spec-table">
            <thead>
                <tr>
                    <th>Model details</th>
                    <th class="text-end">Unit price</th>
                    <th class="text-end">Qty</th>
                    <th class="text-end">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @forelse ($cart as $item)
                    @php
                        $subtotal = $item->qty * $item->product->price;
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td>
                            <div class="model-cell">
                                @if ($item->product->image)
                                    <img
                                        src="{{ asset('storage/' . $item->product->image) }}"
                                        alt="{{ $item->product->name }}"
                                        class="model-image"
                                        onerror="this.onerror=null; this.outerHTML='<span class=&quot;model-placeholder&quot;><i class=&quot;bi bi-car-front&quot;></i></span>';"
                                    >
                                @else
                                    <span class="model-placeholder"><i class="bi bi-car-front"></i></span>
                                @endif
                                <div>
                                    <div class="model-name">{{ $item->product->name }}</div>
                                    <div class="model-category">{{ $item->product->category }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="text-end">$ {{ number_format($item->product->price, 0, ',', '.') }}</td>
                        <td class="text-end qty-value">{{ $item->qty }}</td>
                        <td class="text-end fw-bold">$ {{ number_format($subtotal, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-5">Belum ada model dalam konfigurasi Anda.</td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-end">Total investment</td>
                    <td class="text-end total-value">$ {{ number_format($total, 0, ',', '.') }}</td>
                </tr>
            </tfoot>
        </table>

        <footer class="sheet-footer">
            <span>TURISMO — Designed for the drive.</span>
            <span>Specification summary, subject to availability.</span>
        </footer>
    </main>
</body>
</html>
