<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/home">Buy & Sell Ticket <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/soldtickets">Sold Tickets</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/customerdetails">Customer Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/stats">Statistics</a>
        </li>
      </ul>
      <a class="btn btn-danger" href="/logout" class="navbar-brand pull-right"><strong>Logout, {{session()->get('username')}}</strong></a>
    </div>
</nav>