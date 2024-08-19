<?php
echo "<h1>Traits</h1>";
trait message
{
    public function call()
    {
        echo "Hey <strong>Neha</strong>" . "<br/>";
    }
}

class MyClass
{
    use message;
}
class MyClass1
{
    use message;
}
class MyClass2
{
    use message;
}
$myclass = new MyClass();
$myclass1 = new MyClass1();
$myclass2 = new MyClass2();
$myclass->call();
$myclass1->call();
$myclass2->call();

echo "<h5>Trait using a condition in it</h5>";

trait AccessControl
{
    public function checkAccess($user)
    {
        // Access control logic
        return $user === "admin";
    }
}

class Document
{
    use AccessControl;

    public function viewDocument($user)
    {
        if ($this->checkAccess($user)) {
            echo "Access granted to view document.<br/>";
        } else {
            echo "Access denied.<br/>";
        }
    }
}

$doc = new Document();
$doc->viewDocument("user");
$doc->viewDocument("admin");

echo "<br/>";

// ITS ALSO AN EXAMPLE OF USING TRAITS
/*trait ApiClient {
    public function fetchFromApi($url) {
        // API fetching logic
        return file_get_contents($url);
    }
}


class WeatherService {
    use ApiClient;

    public function getWeather($city) {
        $apiUrl = "http://api.weather.com/v3/wx/conditions/current?city=" . $city;
        return $this->fetchFromApi($apiUrl);
    }
}

$weatherService = new WeatherService();
echo $weatherService->getWeather("Karachi"); */

trait Notifiable {
    public function sendNotification($message) {
        // Notification logic
        echo "Notification sent: " . $message;
    }
}

class Order {
    use Notifiable;

    public function placeOrder() {
        // Order placement logic
        $this->sendNotification("Your order has been placed.");
    }
}

$order = new Order();
$order->placeOrder();
echo "<br/>";
echo "<br/>";

// OVERRIDING IN TRAITS

trait Tuiton {
    private function stationary(){
        echo "I love to buy stationary";
    }

    public function books(){
        echo "I love to read books";
    }
}

class Student{
    use Tuiton{
        Tuiton::stationary as public pencils;
    }

    public function cost(){
        $this->books("Your cost of books is around 500$");
    }
}

$std = new Student();
$std->pencils();
echo "<br/>";
$std->cost();

?>
