<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DashboardController
{
    public function Dashboard()
    {
     return new Response(
         '<html><body><h1>Home Page</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac tincidunt vitae semper quis lectus. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor. Ornare lectus sit amet est placerat in egestas erat imperdiet. Eget gravida cum sociis natoque penatibus et magnis dis. Fames ac turpis egestas integer eget aliquet nibh praesent tristique. Vitae justo eget magna fermentum iaculis eu non. Sed felis eget velit aliquet. Aliquam vestibulum morbi blandit cursus. Pulvinar mattis nunc sed blandit libero volutpat sed cras. Magna ac placerat vestibulum lectus mauris ultrices.</p>
                 <p>Id venenatis a condimentum vitae sapien pellentesque habitant. Ut porttitor leo a diam sollicitudin tempor id eu. Adipiscing enim eu turpis egestas pretium aenean pharetra magna. Non enim praesent elementum facilisis leo. Senectus et netus et malesuada fames ac turpis egestas maecenas. Tortor at risus viverra adipiscing at in tellus. Semper viverra nam libero justo laoreet sit amet cursus. Adipiscing commodo elit at imperdiet dui. Turpis massa tincidunt dui ut. Mauris nunc congue nisi vitae suscipit tellus mauris a diam. Neque laoreet suspendisse interdum consectetur libero id. Mauris sit amet massa vitae. Sem et tortor consequat id. Odio euismod lacinia at quis risus sed vulputate. Facilisis mauris sit amet massa.</p>
                 
                 
                 </body></html>');
    }
}



