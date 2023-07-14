<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contoh Surat Pengajuan Dana</title>
    <style>
        #judul {
            text-align: center;
        }

        #halaman {
            width: auto;
            height: auto;
            border: 1px solid;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;

        }

        .tab,
        th {
            border: 1px solid black;
            /* Mengatur garis tepi tabel dengan ketebalan 1px dan warna hitam */
            border-collapse: collapse;
            /* Menggabungkan garis tepi sel-sel yang berdekatan */
            text-align: center;
            padding-left: 2px;
        }
    </style>
</head>

<body>
    <div id=halaman class="container-fluid">
        <h3 id=judul>SURAT PENGAJUAN</h3>

        <p>Saya yang bertanda tangan di bawah ini :</p>

        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->user->name }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Untuk </td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->to }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Pengajuan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->ketegori_pengajuan }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Departement</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->departement }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tanggal Pengajuan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->tanggal_kebutuhan }}</td>
            </tr>
        </table>

        <table class="table table-bordered tab mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Desciption</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th style="text-align: left">{{ $data->description }} </th>
                    <th>{{ $data->unit }}</th>
                    <th>{{ $data->qty }}</th>
                    <th style="text-align: left">Rp. {{ number_format($data->price, 0, ',', '.') }}</th>
                    <th style="text-align: left">Rp. {{ number_format($data->total, 0, ',', '.') }}</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th style="text-align: left">{{ $data->description2 }} </th>
                    <th>{{ $data->unit2 }}</th>
                    <th>{{ $data->qty2 }}</th>
                    <th style="text-align: left">
                        @switch($data)
                        @case($data->price2 == null)
                        @break
                        @default
                        Rp. {{ number_format($data->price2, 0, ',', '.') }}
                        @endswitch </th>
                    <th style="text-align: left">
                        @switch($data)
                        @case($data->total2 == '0')
                        @break
                        @default
                        Rp. {{ number_format($data->total2, 0, ',', '.') }}
                        @endswitch
                    </th>
                </tr>
                <tr>
                    <th>3</th>
                    <th style="text-align: left">{{ $data->description3 }} </th>
                    <th>{{ $data->unit3 }}</th>
                    <th>{{ $data->qty3 }}</th>
                    <th style="text-align: left">
                        @switch($data)
                        @case($data->price3 == null)
                        @break
                        @default
                        Rp. {{ number_format($data->price3, 0, ',', '.') }}
                        @endswitch
                    </th>
                    <th style="text-align: left">
                        @switch($data)
                        @case($data->total3 == '0')
                        @break
                        @default
                        Rp. {{ number_format($data->total3, 0, ',', '.') }}
                        @endswitch
                    </th>
                </tr>
                <tr>
                    <th>4</th>
                    <th style="text-align: left">{{ $data->description4 }} </th>
                    <th>{{ $data->unit4 }}</th>
                    <th>{{ $data->qty4 }}</th>
                    <th style="text-align: left">
                        @switch($data)
                        @case($data->price4 == null)
                        @break
                        @default
                        Rp. {{ number_format($data->price4, 0, ',', '.') }}
                        @endswitch
                    </th>
                    <th style="text-align: left">
                        @switch($data)
                        @case($data->total4 == '0')
                        @break
                        @default
                        Rp. {{ number_format($data->total4, 0, ',', '.') }}
                        @endswitch
                    </th>
                </tr>
                <tr>
                    <th colspan="5" style="text-align: center">Total</th>
                    <th style="text-align: left">Rp. {{ number_format($data->jumlah_total, 0, ',', '.') }}</th>
                </tr>
            </tbody>
        </table>

        <script charset="utf-8">
            var TGSort = window.TGSort || function (n) {
                "use strict";

                function r(n) {
                    return n ? n.length : 0
                }

                function t(n, t, e, o = 0) {
                    for (e = r(n); o < e; ++o) t(n[o], o)
                }

                function e(n) {
                    return n.split("").reverse().join("")
                }

                function o(n) {
                    var e = n[0];
                    return t(n, function (n) {
                        for (; !n.startsWith(e);) e = e.substring(0, r(e) - 1)
                    }), r(e)
                }

                function u(n, r, e = []) {
                    return t(n, function (n) {
                        r(n) && e.push(n)
                    }), e
                }
                var a = parseFloat;

                function i(n, r) {
                    return function (t) {
                        var e = "";
                        return t.replace(n, function (n, t, o) {
                            return e = t.replace(r, "") + "." + (o || "").substring(1)
                        }), a(e)
                    }
                }
                var s = i(/^(?:\s*)([+-]?(?:\d+)(?:,\d{3})*)(\.\d*)?$/g, /,/g),
                    c = i(/^(?:\s*)([+-]?(?:\d+)(?:\.\d{3})*)(,\d*)?$/g, /\./g);

                function f(n) {
                    var t = a(n);
                    return !isNaN(t) && r("" + t) + 1 >= r(n) ? t : NaN
                }

                function d(n) {
                    var e = [],
                        o = n;
                    return t([f, s, c], function (u) {
                        var a = [],
                            i = [];
                        t(n, function (n, r) {
                            r = u(n), a.push(r), r || i.push(n)
                        }), r(i) < r(o) && (o = i, e = a)
                    }), r(u(o, function (n) {
                        return n == o[0]
                    })) == r(o) ? e : []
                }

                function v(n) {
                    if ("TABLE" == n.nodeName) {
                        for (var a = function (r) {
                                    var e, o, u = [],
                                        a = [];
                                    return function n(r, e) {
                                        e(r), t(r.childNodes, function (r) {
                                            n(r, e)
                                        })
                                    }(n, function (n) {
                                        "TR" == (o = n.nodeName) ? (e = [], u.push(e), a.push(n)) : "TD" !=
                                        o && "TH" != o || e.push(n)
                                    }), [u, a]
                                }(), i = a[0], s = a[1], c = r(i), f = c > 1 && r(i[0]) < r(i[1]) ? 1 : 0, v = f +
                                1, p = i[f], h = r(p), l = [], g = [], N = [], m = v; m < c; ++m) {
                            for (var T = 0; T < h; ++T) {
                                r(g) < h && g.push([]);
                                var C = i[m][T],
                                    L = C.textContent || C.innerText || "";
                                g[T].push(L.trim())
                            }
                            N.push(m - v)
                        }
                        t(p, function (n, t) {
                            l[t] = 0;
                            var a = n.classList;
                            a.add("tg-sort-header"), n.addEventListener("click", function () {
                                var n = l[t];
                                ! function () {
                                    for (var n = 0; n < h; ++n) {
                                        var r = p[n].classList;
                                        r.remove("tg-sort-asc"), r.remove("tg-sort-desc"), l[n] = 0
                                    }
                                }(), (n = 1 == n ? -1 : +!n) && a.add(n > 0 ? "tg-sort-asc" :
                                    "tg-sort-desc"), l[t] = n;
                                var i, f = g[t],
                                    m = function (r, t) {
                                        return n * f[r].localeCompare(f[t]) || n * (r - t)
                                    },
                                    T = function (n) {
                                        var t = d(n);
                                        if (!r(t)) {
                                            var u = o(n),
                                                a = o(n.map(e));
                                            t = d(n.map(function (n) {
                                                return n.substring(u, r(n) - a)
                                            }))
                                        }
                                        return t
                                    }(f);
                                (r(T) || r(T = r(u(i = f.map(Date.parse), isNaN)) ? [] : i)) && (m =
                                    function (r, t) {
                                        var e = T[r],
                                            o = T[t],
                                            u = isNaN(e),
                                            a = isNaN(o);
                                        return u && a ? 0 : u ? -n : a ? n : e > o ? n : e < o ? -
                                            n : n * (r - t)
                                    });
                                var C, L = N.slice();
                                L.sort(m);
                                for (var E = v; E < c; ++E)(C = s[E].parentNode).removeChild(s[E]);
                                for (E = v; E < c; ++E) C.appendChild(s[v + L[E - v]])
                            })
                        })
                    }
                }
                n.addEventListener("DOMContentLoaded", function () {
                    for (var t = n.getElementsByClassName("tg"), e = 0; e < r(t); ++e) try {
                        v(t[e])
                    } catch (n) {}
                })
            }(document)
        </script>

        {{-- <p>menyatakan dengan sebenar-benarnya akan bersungguh-sungguh belajar dan bekerja.</p> --}}

        {{-- <div style="width: 50%; text-align: left; float: right;">Purwodadi, 20 Januari 2020</div><br> --}}
        <div style="width: 50%; text-align: left; float: left;">Amount Received</div><br><br><br><br>


        <div style="width: 50%; text-align: right; float: right;">Yang bertanda tangan,</div><br><br><br><br>

        <div style="width: 50%; text-align: left; float: left;">Arbrian Abdul Jamal</div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>