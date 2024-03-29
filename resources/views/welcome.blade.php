@extends('layouts.app')

@section('content')
    <div class="d-flex">
        <div class="demo-only" style="width: 320px;">
            <nav class="slds-nav-vertical" aria-label="Sub page">
                <div class="slds-nav-vertical__section">
                    <h2 id="entity-header" class="slds-nav-vertical__title">Reports</h2>
                    <ul aria-describedby="entity-header">
                        <li class="slds-nav-vertical__item slds-is-active"><a href="javascript:void(0);" class="slds-nav-vertical__action" aria-current="page">Recent</a></li>
                        <li class="slds-nav-vertical__item"><a href="javascript:void(0);" class="slds-nav-vertical__action">Created by Me</a></li>
                        <li class="slds-nav-vertical__item"><a href="javascript:void(0);" class="slds-nav-vertical__action">Private Reports</a></li>
                        <li class="slds-nav-vertical__item"><a href="javascript:void(0);" class="slds-nav-vertical__action">Public Reports</a></li>
                        <li class="slds-nav-vertical__item"><a href="javascript:void(0);" class="slds-nav-vertical__action">All Reports</a></li>
                    </ul>
                </div>
                <div class="slds-nav-vertical__section">
                    <h2 id="folder-header" class="slds-nav-vertical__title">Folders</h2>
                    <ul aria-describedby="folder-header">
                        <li class="slds-nav-vertical__item"><a href="javascript:void(0);" class="slds-nav-vertical__action">Created by Me</a></li>
                        <li class="slds-nav-vertical__item"><a href="javascript:void(0);" class="slds-nav-vertical__action">Shared with Me</a></li>
                        <li class="slds-nav-vertical__item"><a href="javascript:void(0);" class="slds-nav-vertical__action">All Reports</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div>
            @if(isset($page))
                <p class="trix-content">{!!  $page[0]->content !!}</p>
            @endif
        </div>
    </div>
    </body>
</html>
@endsection