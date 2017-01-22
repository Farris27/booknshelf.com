@extends('layouts.app')

@section('content')
    <section class="hero is-medium is-primary is-bold">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title is-2">
              <strong> Welcome to Booknshelf </strong>
          </h1>
          <h2 class="subtitle">
              Find the best books on different topics. The ones you'll read!
          </h2>
        </div>
      </div>
    </section>

    <section class="section is-primary is-fullheight is-bold">
        <div class="container">
            <div class="tile is-ancestor">
              <div class="tile is-vertical is-8">
                <div class="tile">
                  <div class="tile is-parent is-vertical">
                    <article class="tile is-child notification is-primary">
                      <p class="title">Vertical...</p>
                      <p class="subtitle">Top tile</p>
                    </article>
                    <article class="tile is-child notification is-warning">
                      <p class="title">...tiles</p>
                      <p class="subtitle">Bottom tile</p>
                    </article>
                  </div>
                  <div class="tile is-parent">
                    <article class="tile is-child notification is-info">
                      <p class="title">Middle tile</p>
                      <p class="subtitle">With an image</p>
                      <figure class="image is-4by3">
                        <img src="https://source.unsplash.com/category/people/640x480">
                      </figure>
                    </article>
                  </div>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification is-danger">
                    <p class="title">Wide tile</p>
                    <p class="subtitle">Aligned with the right tile</p>
                    <div class="content">
                      <!-- Content -->
                    </div>
                  </article>
                </div>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification is-success">
                  <div class="content">
                    <p class="title">Tall tile</p>
                    <p class="subtitle">With even more content</p>
                    <div class="content">
                      <!-- Content -->
                    </div>
                  </div>
                </article>
              </div>
            </div>
        </div>
    </section>

@endsection
