<section>

    @if (session('status') === 'password-updated')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Kata Sandi Berhasil Diperbarui
      </div>
@endif

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Perbarui Kata Sandi') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.') }}
        </p>
    </header>


<form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
    <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-body">
            {{-- <div>
                <x-input-label for="update_password_current_password" :value="__('Current Password')" />
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div> --}}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="update_password_current_password">{{ __('Kata Sandi Saat Ini') }}</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-key"></i
                    ></span>
                    <input
                      type="password"
                      class="form-control"
                      name="current_password"
                      id="update_password_current_password"
                      autocomplete="current-password"
                    />
                  </div>
                  @error('current_password')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
              </div>
              {{-- <div>
                <x-input-label for="update_password_password" :value="__('New Password')" />
                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div> --}}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="update_password_password">{{ __('Kata Sandi Baru') }}</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-key"></i
                    ></span>
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      id="update_password_password"
                      autocomplete="new-password"
                    />
                  </div>
                  @error('password')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
              </div>
              {{-- <div>
                <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div> --}}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="update_password_password_confirmation">{{ __('Konfirmasi Kata Sandi') }}</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-key"></i
                    ></span>
                    <input
                      type="password"
                      class="form-control"
                      name="password_confirmation"
                      id="update_password_password_confirmation"
                      autocomplete="new-password"
                    />
                  </div>
                  @error('password_confirmation')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
              </div>
              {{-- <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
    
                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('Saved.') }}</p>
                @endif
            </div> --}}
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                </div>
              </div>
            </div>
        </div>
    </div>
</form>


    {{-- <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form> --}}
</section>
