<div class="col-12">
    <h1>Детали</h1>
</div>

<div class="form-container row">
    <div class="col-lg-9">
        <div class="form-group" :class="[errors.has('address-form.billing[address1][]') ? 'has-error' : '']">

            <input type="text" v-validate="'required'" placeholder="Адрес доставки" class="control form-control user_info" id="billing_address_0" name="billing[address1][]" v-model="address.billing.address1[0]" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.address1') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[address1][]')">
                @{{ errors.first('address-form.billing[address1][]') }}
            </span>
        </div>

    </div>

    <div class="col-lg-3">
        <div class="form-group" :class="[errors.has('address-form.billing[apartment]') ? 'has-error' : '']">

            <input type="text" v-validate="'required'" placeholder="Дом" class="control form-control user_info" id="billing_apartment" name="billing[apartment]" v-model="address.billing.apartment" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.apartment') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[apartment]')">
                @{{ errors.first('address-form.billing[apartment]') }}
            </span>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="form-group" :class="[errors.has('address-form.billing[city]') ? 'has-error' : '']">

            <input type="text" v-validate="'required'" placeholder="{{ __('shop::app.checkout.onepage.city') }}" class="control form-control user_info" id="billing_city" name="billing[city]" v-model="address.billing.city" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.city') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[city]')">
                @{{ errors.first('address-form.billing[city]') }}
            </span>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group" :class="[errors.has('address-form.billing[postcode]') ? 'has-error' : '']">

            <input type="text" v-validate="'required'" placeholder="{{ __('shop::app.checkout.onepage.postcode') }}" class="control form-control user_info" id="billing_postcode" name="billing[postcode]" v-model="address.billing.postcode" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.postcode') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[postcode]')">
                @{{ errors.first('address-form.billing[postcode]') }}
            </span>
        </div>
    </div>

    <div class="col-lg-7">
        <div class="form-group" :class="[errors.has('address-form.billing[first_name]') ? 'has-error' : '']">

            <input type="text" v-validate="'required'" placeholder="{{ __('shop::app.checkout.onepage.first-name') }}" class="control form-control user_info" id="billing_first_name" name="billing[first_name]" v-model="address.billing.first_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.first-name') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[first_name]')">
                @{{ errors.first('address-form.billing[first_name]') }}
            </span>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="form-group" :class="[errors.has('address-form.billing[last_name]') ? 'has-error' : '']">

            <input type="text" v-validate="'required'" placeholder="{{ __('shop::app.checkout.onepage.last-name') }}" class="control form-control user_info" id="billing_last_name" name="billing[last_name]" v-model="address.billing.last_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.last-name') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[last_name]')">
                @{{ errors.first('address-form.billing[last_name]') }}
            </span>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group" :class="[errors.has('address-form.billing[phone]') ? 'has-error' : '']">

            <input type="text" v-validate="'required'" placeholder="{{ __('shop::app.checkout.onepage.phone') }}" class="control form-control user_info" id="billing_phone" name="billing[phone]" v-model="address.billing.phone" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.phone') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[phone]')">
                @{{ errors.first('address-form.billing[phone]') }}
            </span>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group" :class="[errors.has('address-form.billing[email]') ? 'has-error' : '']">

            <input type="text" v-validate="'required'" placeholder="{{ __('shop::app.checkout.onepage.email') }}" class="control form-control user_info" id="billing_email" name="billing[email]" v-model="address.billing.email" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.email') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[email]')">
                @{{ errors.first('address-form.billing[email]') }}
            </span>
        </div>
    </div>
</div>