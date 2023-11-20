<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visitors Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    @media (min-width: 1025px) {
      .h-custom {
        height: 100vh !important;
      }
    }
  </style>
</head>

<body>
  <section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">

              <div class="row">

                <div class="col-lg-7">
                  <h5 class="mb-3"><a href="#!" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                  <hr>

                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                      <p class="mb-1">Shopping cart</p>
                      <p class="mb-0">You have 4 items in your cart</p>
                    </div>
                    <div>
                      <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                    </div>
                  </div>

                  @foreach($products as $product)
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img src="{{ $product['img'] }}" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5>{{ $product['name'] }}</h5>
                            <p class="small mb-0">Details Here</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 50px;">
                            <h5 class="fw-normal mb-0">1</h5>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">${{ $product['price'] }}</h5>
                          </div>
                          <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>
                <div class="col-lg-5">

                  <div class="card bg-primary text-white rounded-3">
                    <div class="card-body">

                      <hr class="my-4">

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2">${{ number_format($subtotal, 2) }}</p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Shipping</p>
                        <p class="mb-2">${{ number_format($shipping, 2) }}</p>
                      </div>

                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Total (Incl. taxes)</p>
                        <p class="mb-2">${{ number_format($total, 2) }}</p>
                      </div>

                      <button type="button" class="btn btn-info btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span>${{ number_format($total, 2) }}</span>
                          <span>pay with flutter wave <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                        </div>
                      </button>

                    </div>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>