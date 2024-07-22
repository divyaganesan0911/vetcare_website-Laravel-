<div>
     <div>
<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Vet Hub</a>                    
                    <span></span> Query
                </div>
            </div>
        </div>                
        <section class="pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 m-auto">
                        <div class="contact-from-area padding-20-row-col wow FadeInUp">
                            <h3 class="mb-10 text-center">Get in Touch with Your Queries</h3>
                            <p class="text-muted mb-30 text-center font-sm"></p>
                            @if(Session::has('query_message'))
                                <div class="alert alert-success" role="alert">{{Session::get('query_message')}}</div>
                            @endif
                            <form class="contact-form-style text-center" id="contact-form" wire:submit.prevent="sendMessage" >
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="First Name" type="text" wire:model="name">
                                            @error('name')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="email" placeholder="Your Email" type="email" wire:model="email">
                                            @error('email')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="telephone" placeholder="Your Phone" type="tel" wire:model="phone">
                                            @error('phone')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="Pet Category" type="text" wire:model="category">
                                            @error('category')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="Pet Gender" type="text" wire:model="gender">
                                            @error('gender')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="Pet Age" type="text" wire:model="age">
                                            @error('age')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="Pet Weight" type="text" wire:model="weight">
                                            @error('weight')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="Location" type="text" wire:model="location">
                                            @error('location')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="textarea-style mb-30">
                                            <textarea name="message" placeholder="Describes your Concern" wire:model="message"></textarea>
                                            @error('message')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <button class="submit submit-auto-width" type="submit">Send Inquiry</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

</div>
