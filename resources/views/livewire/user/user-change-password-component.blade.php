 <div>
        <section class="pt-150 pb-150">
            <div class="container"style="padding : 30px 0;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Change Password</h3>
                                        </div>
                                        @if(Session::has('password_success'))
                                        <div class="alert alert-success" role="alert">
                                        {{ Session::get('password_success') }}
                                        </div>
                                        @endif
                                        @if(Session::has('password_error'))
                                        <div class="alert alert-danger" role="alert">
                                        {{ Session::get('password_error') }}
                                        </div>
                                        @endif
                                       <form   wire:submit.prevent="changePassword">
                                            <div class="form-group">
                                                <input required="" type="password" id="old_password" name="current_password" placeholder="Current Password"  wire:model="current_password" />
                                                @error('current_password')  <p class="text-danger">{{$message}}</p> 
                                                @enderror
                                            </div>
                                              <div class="form-group">
                                               <input type="password" placeholder="New Password"class="form-control input-md" id="old_password" name="password" wire:model="password"/>
                                               @error('password')  <p class="text-danger">{{$message}}</p>
                                               @enderror
                                            </div>
                                              <div class="form-group">
                                              <input type="password" placeholder="Confirm Password"class="form-control input-md" id="old_password" name="password_confirmation" wire:model="password_confirmation"/>
                                            
                                            </div>
                                           <div class="form-group">
                                            <label   class="col-md-4 control-label"> </label>
                                            <div class="col-md-4">
                                            <button type="submit"  class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </section>
        </div>