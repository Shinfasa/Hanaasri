@extends('layouts.app')

@section('title', 'WM Hana Asri')

@section('content')
<main id="main">
    <section id="categories" class="what-we-do">
        <div class="container">
            <div class="section-title">
                <h2>Kategori</h2>
            </div>
            <div class="row">
                
                    <div class="col-lg-3 col-md-4 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            
                        </div>
                    </div>
               
            </div>  
        </div>
    </section>

    <section id="menu" class="what-we-do">
        <div class="container">
            <div class="section-title">
                <h2>Rekomendasi Menu</h2>
            </div>
            <div class="row">
                
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-0" style="margin-bottom: 30px;">
                        <div class="card icon-box" style="border-radius: 20px;">
                            <div class="img">
                                
                            </div>
                            <br>
                            
                            
                            <div>
                                <a href="#" class="btn m-2 pt-2 pb-2" style="color: #E8853D;">Detail Menu</a>
                                
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>
</main>
@endsection
