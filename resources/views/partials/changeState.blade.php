<div class="command-edit-container" id="changeState">
    <div class="base-container command-edit-wrapper">

        <button class="command-edit-close-container" id="closeChangeState">
            <svg class="icon command-edit-close-icon">
                <use xlink:href="{{ asset('svg/icons.svg#close') }}"></use>
            </svg>
        </button>

        <div class="command-state-main-container">

            <p class="command-edit-title t1">Table 1</p>

            <div class="command-menus-container">
    
                <div class="command-menu-container active">
                    <div class="command-wrapper-container">
                        <svg class="icon command-menu-icon">
                            <use xlink:href="{{ asset('svg/icons.svg#en_préparation') }}"></use>
                        </svg>
                        <p class="command-menu-title">En préparation</p>
                    </div>
                </div>

                <div class="command-menu-container">
                    <div class="command-wrapper-container">
                        <svg class="icon command-menu-icon">
                            <use xlink:href="{{ asset('svg/icons.svg#servie') }}"></use>
                        </svg>
                        <p class="command-menu-title">Servie</p>
                    </div>
                </div>

                <div class="command-menu-container">
                    <div class="command-wrapper-container">
                        <svg class="icon command-menu-icon">
                            <use xlink:href="{{ asset('svg/icons.svg#payée') }}"></use>
                        </svg>
                        <p class="command-menu-title">Payée</p>
                    </div>
                </div>

                <div class="command-menu-container">
                    <div class="command-wrapper-container">
                        <svg class="icon command-menu-icon">
                            <use xlink:href="{{ asset('svg/icons.svg#annulée') }}"></use>
                        </svg>
                        <p class="command-menu-title">Annulée</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>