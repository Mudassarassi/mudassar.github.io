<template>
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{!! asset ('../temas/images/icon/logo.png') !!}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <ul>
                    <li>
                        <a href="{{route('quadres.index')}}">
                            All Paintings</a>
                    </li>
                    </ul>
                    <a class="js-arrow" href="#">
                        Paintings by Shop</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list" >

                            <botigas-Component v-for="botigas in botiga"
                            :botigas="botigas"
                            :key="botigas.id"
                            update="update-quadres">

                            </botigas-Component>
                        </ul>
                </li>


            </ul>
        </nav>
    </div>
</aside>
<div class="">
            <!-- HEADER DESKTOP-->
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="">

                            <quadres-Component></quadres-Component>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

</template>

<script>
    import botigasComponent from  './botigasComponent'
    import quadresComponent from  './quadresComponent'
    export default {
        components: {
            botigasComponent,
            quadresComponent
        },

        data(){
        return{
            botiga:[

            ]
        }

    },
    methods:{
      update(botigas){

       }
    },

        mounted(){
        axios.get('/api/botiga').then((response) => {
            console.log(response);
            this.botiga = response.data.botiga
        });
     }


}
</script>

