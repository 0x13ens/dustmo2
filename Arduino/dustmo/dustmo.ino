// This is the users wifi creds 
// const char* ssid     = "Lots of Security";
// const char* password = "Mercedes19";

// This is the colleges wifi network
const char* ssid     = "student_wifi";
const char* password = "studentnet";


//const char* ssid     = "iPhone";
//const char* password = "dustmo";

// This Holds our websites name api 
const char* serverName = "http://dustmo.com/api/sensors";

// This checks if were using the board 8266 or Esp32 
#ifdef ESP32
  #include <HTTPClient.h>
#else
  #include <ESP8266WiFi.h>
  #include <ESP8266HTTPClient.h>
  #include <WiFiClient.h>
#endif

#include <Wire.h>
#include <Adafruit_Sensor.h>
#include <Adafruit_BME280.h>

#define I2C_SDA 33
#define I2C_SCL 32

// SeaLevelPressure can change depending on the users location so it's best to make a location request and fill this in automatically 
#define SEALEVELPRESSURE_HPA (1013.25)

TwoWire I2CBME = TwoWire(0);

// This is the Adafruit package which allows us to grab the data from the BME280 Sensor
Adafruit_BME280 bme;

unsigned long delayTime;

void setup() {
  // This opens our serial port and sets the data rate to 115200 
  Serial.begin(115200);
  // just printing our we're beginning our test
  Serial.println(F("BME280 test"));
  I2CBME.begin(I2C_SDA, I2C_SCL, 100000);

  bool status;

  // default settings
  // We run a test to see if our BME280 Sensor is connected correctly and display errors as required. 
  status = bme.begin(0x76, &I2CBME);  
  if (!status) {
    Serial.println("Could not find a valid BME280 sensor, check wiring!");
    while (1);
  }

  Serial.println("-- Default Test --");
  delayTime = 1000;

  Serial.println();
  delay(4000);   //Delay needed before calling the WiFi.begin

  // wifi package begins by trying our defined ssid and password above
  WiFi.begin(ssid, password);
  Serial.println("Connecting");
  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());

}

void loop() {

  printValues();
  delay(delayTime);

 //Check WiFi connection status
  if(WiFi.status()== WL_CONNECTED){
    HTTPClient http;

    // Your Domain name with URL path or IP address with path
    http.begin(serverName);

    // Specify content-type header
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");
    String httpRequestData =
    "&temperature=" + String(bme.readTemperature()) +
    "&pressure=" + (bme.readPressure() / 100.0F) +
    "&altitude=" + (bme.readAltitude(SEALEVELPRESSURE_HPA)) +
    "&humidity=" + (bme.readHumidity());
    Serial.print("httpRequestData: ");
    Serial.println(httpRequestData);

    // Send HTTP POST request
    int httpResponseCode = http.POST(httpRequestData);

    if (httpResponseCode>0) {
      Serial.print("HTTP Response code: ");
      Serial.println(httpResponseCode);
    }
    else {
      Serial.print("Error code: ");
      Serial.println(httpResponseCode);
    }
    // Free resources
    http.end();
  }
  else {
    Serial.println("WiFi Disconnected");
  }
  //This delay works between sending our request 10000 = once every 10 seconds.
  delay(10000);
}

// These values aren't required however are useful for debugging and displaying information though the serial port.

void printValues() {
  Serial.print("Temperature = ");
  Serial.print(bme.readTemperature());
  Serial.println(" *C");

  // Convert temperature to Fahrenheit
  /*Serial.print("Temperature = ");
  Serial.print(1.8 * bme.readTemperature() + 32);
  Serial.println(" *F");*/

  Serial.print("Pressure = ");
  Serial.print(bme.readPressure() / 100.0F);
  Serial.println(" hPa");

  Serial.print("Approx. Altitude = ");
  Serial.print(bme.readAltitude(SEALEVELPRESSURE_HPA));
  Serial.println(" m");

  Serial.print("Humidity = ");
  Serial.print(bme.readHumidity());
  Serial.println(" %");

  Serial.println();
}
