<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="list-group account-list">
        <a  class="{if $active eq 'dashboard'}user-active{/if} list-group-item account-list-first" href="/{$globals.user.dashboard}">My Account</a>
        {*<a class="{if $active eq 'wishlist'}user-active{/if} list-group-item" href="/{$globals.user.wishlist}">Wish List</a>*}
        <a class="list-group-item" href="#">Order History</a>
        {*<a class="list-group-item" href="#">Transactions</a>*}
        {*<a class="list-group-item" href="#">Reward Points</a>*}
        {*<a class="list-group-item" href="#">Newsletter</a>*}
        <a class="{if $active eq 'wishlist'}user-active{/if} list-group-item" href="/{$globals.access.logout}">Logout</a>
    </div>
</div>