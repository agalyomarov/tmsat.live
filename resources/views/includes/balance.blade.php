@auth()
    <div class="form_profile mob">
        <p class="name_profile">{{ request()->user()->login }}</p>
        <p class="balance_profile">Ваш баланс<span class="sum">{{ request()->user()->balance }}</span></p>
    </div>
@endauth
