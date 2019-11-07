// Replace with your network credentials
const char* ssid     = "Lots of Security";
const char* password = "Mercedes19";

//const char* ssid     = "iPhone";
//const char* password = "dustmo";

uint64_t macAddress = ESP.getEfuseMac();
uint64_t macAddressTrunc = macAddress << 40;

const char* serverName = "http://dustmo.com/api";

uint64_t chipid;  

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

#define SEALEVELPRESSURE_HPA (1013.25)

Adafruit_BME280 bme; // I2C

unsigned long delayTime;
 
void setup() {
  Wire.begin(SDA,SCL);
  Wire.begin(4,5);
  Serial.begin(115200);
   chipid=ESP.getEfuseMac();//The chip ID is essentially its MAC address(length: 6 bytes).
   Serial.printf("ESP32 Chip ID = %04X",(uint16_t)(chipid>>32));//print High 2 bytes
   Serial.printf("%08X\n",(uint32_t)chipid);//print Low 4bytes.
  Serial.println(F("BME280 test"));
  bool status;

   // default settings
  // (you can also pass in a Wire library object like &Wire2)
  status = bme.begin(0x76);  
  if (!status) {
    Serial.println("Could not find a valid BME280 sensor, check wiring!");
    while (1);
  }

  Serial.println("-- Default Test --");
  delayTime = 1000;

  Serial.println();
  delay(4000);   //Delay needed before calling the WiFi.begin
 
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
  //Send an HTTP POST request every 30 seconds
  delay(10000);  
}

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
