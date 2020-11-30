
    <nav id="primary-menu" class="navbar navbar-expand-sm navbar-navbar-light" style="background-color: #EAE0FC;">
        <div class="container">
            <div class="d-none d-md-block">
                <a class="navbar-brand" href="/">
                <img class="logo logo-dark mt-4" src="<?php echo base_url('assets/images/logo/logo3.png'); ?>" alt="Kolaso Logo" width="15%">
                </a>
            </div>
            <div class="col-sm-12 col-md-3 text-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toogle-inner"></span>
                </button>
                <ul class="navbar-nav ml-lg-auto">
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ni ni-settings-gear-65"></i>
                            <span class="nav-link-inner--text">Hi, User</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                            <div class="dropdown-title">Saldo: Rp 30.000</div>
                            <a class="dropdown-item" href="#">Pengaturan Akun</a>
                            <a class="dropdown-item" href="#">Riwayat Masuk</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Keluar</a>
                        </div>
                    </li> -->
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-lg-inline-block"><i class="far fa-user-circle mr-2"></i>Hi, <?= $user['full_name']; ?></div></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="/" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt mr-3"></i>Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="background-color: #d1c4e9;">
        <div class="nav-wrapper navbar-expand-sm mx-4">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item col-12 col-sm-12 col-md-3">
                    <a class="nav-link mb-sm-3 mb-md-0" href="/user"><i class="fas fa-home mr-2"></i>Dashboard</a>
                </li>
                <li class="nav-item dropdown col-12 col-sm-12 col-md-3">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" href="#"><i class="fas fa-shopping-cart mr-2"></i>Pesanan</a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a href="/user/pesanan" class="dropdown-item has-icon text-green">
                        <i class="fas fa-shopping-basket mr-3"></i>Pesan Baru
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="/user/riwayatpemesanan" class="dropdown-item has-icon text-grey">
                        <i class="fas fa-history"></i></i></i>Riwayat Pemesanan
                    </a>
                    </div>
                </li>
                <li class="nav-item col-12 col-sm-12 col-md-3">
                    <a class="nav-link mb-sm-3 mb-md-0" href="/user/pengumuman"><i class="fas fa-bullhorn mr-2"></i></i>Pengumuman</a>
                </li>
                <li class="nav-item col-12 col-sm-12 col-md-3">
                    <a class="nav-link mb-sm-3 mb-md-0" href="/user/daftarlayanan"><i class="fas fa-book-open mr-2"></i></i></i>Daftar Layanan</a>
                </li>
            </ul>
        </div>

        <!-- <div class="card shadow">
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-dashboard" role="tabpanel" aria-labelledby="tabs-icons-text-dashboard-tab">
                        <card type="default" header-classes="bg-transparent">
                        <div slot="header" class="row align-items-center">
                            <div class="col">
                                <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                                <h5 class="h3 text-white mb-0">Sales value</h5>
                            </div>
                            <div class="col">
                                <ul class="nav nav-pills justify-content-end">
                                    <li class="nav-item mr-2 mr-md-0">
                                        <a class="nav-link py-2 px-3"
                                        href="#"
                                        :class="{active: bigLineChart.activeIndex === 0}"
                                        @click.prevent="initBigChart(0)">
                                            <span class="d-none d-md-block">Month</span>
                                            <span class="d-md-none">M</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-3"
                                        href="#"
                                        :class="{active: bigLineChart.activeIndex === 1}"
                                        @click.prevent="initBigChart(1)">
                                            <span class="d-none d-md-block">Week</span>
                                            <span class="d-md-none">W</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <line-chart
                                :height="350"
                                ref="bigChart"
                                :chart-data="bigLineChart.chartData"
                                :extra-options="bigLineChart.extraOptions"
                        >
                        </line-chart>

                    </card>

                    <script>
                    import * as chartConfigs from '@/components/Charts/config';
                    export default {
                    data() {
                        return {
                        bigLineChart: {
                            allData: [
                            [0, 20, 10, 30, 15, 40, 20, 60, 60],
                            [0, 20, 5, 25, 10, 30, 15, 40, 40]
                            ],
                            activeIndex: 0,
                            chartData: {
                            datasets: [],
                            labels: [],
                            },
                            extraOptions: chartConfigs.blueChartOptions,
                        }
                        };
                    },
                    methods: {
                        initBigChart(index) {
                        let chartData = {
                            datasets: [
                            {
                                label: 'Performance',
                                data: this.bigLineChart.allData[index]
                            }
                            ],
                            labels: ['May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        };
                        this.bigLineChart.chartData = chartData;
                        this.bigLineChart.activeIndex = index;
                        }
                    },
                    mounted() {
                        this.initBigChart(0);
                    }
                    };
                    </script>

                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-pesanan" role="tabpanel" aria-labelledby="tabs-icons-text-pesanan-tab">
                        <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-deposit" role="tabpanel" aria-labelledby="tabs-icons-text-deposit-tab">
                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-mutasi-saldo" role="tabpanel" aria-labelledby="tabs-icons-text-mutasi-saldo-tab">
                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-tiket-bantuan" role="tabpanel" aria-labelledby="tabs-icons-text-tiket-bantuan-tab">
                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-daftar-layanan" role="tabpanel" aria-labelledby="tabs-icons-text-daftar-layanan-tab">
                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-dokumentasi-api" role="tabpanel" aria-labelledby="tabs-icons-text-dokumentasi-api-tab">
                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-sitemap" role="tabpanel" aria-labelledby="tabs-icons-text-sitemap-tab">
                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
