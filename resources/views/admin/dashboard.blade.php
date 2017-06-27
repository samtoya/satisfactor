@extends('layouts.admin')

@section('content')
    <nav style="position: absolute;bottom: 20px;left: 20px;">
        <div class="satisfied" style="border: 1px solid #CCC;-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;" v-show="satisfied">
            <a :href="satisfied" @click.prevent="navigate">
                <img src="img/svg/satisfied_btn.svg" alt="" width="80px">
            </a>
        </div>
    </nav>

    <nav style="position: absolute;bottom: 20px;right: 20px;">
        <div class="not_satisfied" style="border: 1px solid #CCC;-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;" v-show="not_satisfied">
            <a :href="not_satisfied" @click.prevent="navigate">
                <img src="img/svg/not_satisfied_btn.svg" alt="" width="80px">
            </a>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="header">
                <h2>Satisfied Customers</h2>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="button-row clearfix">
					<span class="pull-right">
						Very Satisfied
					</span>
            </div>

            <div class="info-content" v-show="">
                <img src="img/svg/very_satisfied_placeholder.svg" alt="Very Satisfied" title="Very Satisfied">
                <div id="meta-info">
                    <h2 class="percentage">{{ $percentage }}%</h2>
                    <p class="overall-text">
                        of <span id="customer-total">{{ $total }}</span> customers total
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop