<div class="modal show-modal  fade modal-bookmark pt-5">
    <div class="modal-dialog  modal-lg mt-0 mb-0" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <div class="row">
                        <div class="col-md-12">
                            <b>{{ __('dashboard.user_info') }}</b>
                        </div>
                    </div>
                </h5>
            </div>
                <div class="col-sm-12 col-xl-12 xl-100" style="padding: 20px;">
                    <div class="height-equal" style="box-shadow: none !important;">
                      <div class="">
                        <div class="" id="pills-icontabContent">
                          <div class="fade show active" id="pills-iconhome" role="tabpanel" aria-labelledby="pills-iconhome-tab">
                              <div class="row">
                                    <div class="col-12">
                                        <div class="" id="myTabContent">
                                            <div class="show active" id="content-1" role="tabpanel" aria-labelledby="content-1-tab">
                                                <div class="">
                                                    <div class="flex items-center">
                                                        <h3>{{ $user->name }}</h3>
                                                    </div>

                                                    <div class="text_view">
                                                        <p><strong> {{ __('dashboard.email') }} : </strong> {{ $user->email }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
            <div class="modal-footer">
                <a href="{{ route('dashboard.users.index') }}" class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title=""
                    title="">{{ __('dashboard.close') }}</a>
            </div>
        </div>
    </div>
</div>
