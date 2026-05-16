{{-- This file is used for menu items by any Backpack v6 theme --}}
<x-backpack::menu-item
        :title="trans('backpack::base.dashboard')"
        icon="la la-home"
        :link="backpack_url('dashboard')"/>

<x-backpack::menu-item
        :title="trans('backpack::crud.file_manager')"
        icon="la la-files-o"
        :link="backpack_url('file-manager')"/>