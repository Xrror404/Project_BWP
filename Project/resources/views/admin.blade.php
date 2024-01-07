@extends('layouts.Admin')


@section('content')
    <div class="container-fluid"style="padding-bottom:4vh;padding-left:0;padding-right:0;">
        <div class="card">
            <div class="container-fluid  p-0 align-items-left"style="border-bottom: 0.5vh solid #fff;margin-bottom:2vh;">
                <div class="container"style="padding:2vh 1vw;">
                    <h2 class="text-light">Perubahan Jadwal Kuliah</h2>
                </div>
            </div>
            <div class="container-fluid"style="margin-left:1vw;width:auto;">
                <h5 class="text-light text-center">Untuk saat ini, tidak ada pengumuman Perubahan Jadwal Kuliah.</h5>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-lg-8"style="padding-left:0.5vw;">
                <section class="announcement-card p-0"style="margin-left:0.5vw;">
                    <div
                        class="container-fluid p-0 align-items-left"style="border-bottom: 0.5vh solid #fff;margin-bottom:2vh;">
                        <div class="container"style="padding:2vh;">
                            <h2 class="text-light">Pengumuman</h2>
                        </div>
                    </div>
                    <div class="container-fluid"style="margin-left:1vw;width:auto;margin-right:0vw;">
                        {{-- @foreach ($announcements as $announcement)
                            <div class="announcement-item">
                                <h3 class="file-link" style="cursor: pointer;"
                                    data-file="{{ $announcement->isi_pengumuman }}">{{ $announcement->judul_pengumuman }}
                                </h3>
                            </div>
                        @endforeach
                        {{ $announcements->onEachSide(1)->links('pagination.Announcement_pagination') }} --}}
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="announcement-card p-0">
                    <div class="container-fluid p-0"style="border-bottom: 0.5vh solid #fff;margin-bottom:2vh;">
                        <div class="container"style="padding:2vh;">
                            <h2 class="text-light">File Penting</h2>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="container-fluid p-0">
                            {{-- @foreach ($ImportantFile as $importantFile)
                                <div class="announcement-item">
                                    <h5 class="file-link" style="cursor: pointer;"
                                        data-file="{{ $importantFile->isi_file }}">{{ $importantFile->nama_file }}</h5>
                                </div>
                            @endforeach --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <a href="{{ route('Dosen') }}"><button>ke dosen </button></a>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var fileLinks = document.querySelectorAll('.file-link');

            fileLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    var fileUrl = link.getAttribute('data-file');
                    window.location.href = fileUrl;
                });
            });
        });
    </script>
@endsection
