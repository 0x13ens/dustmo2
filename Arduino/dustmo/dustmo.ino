/*
 * Arduino communication with  a web server example
 */
 
#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

int measurePin = A0;
int ledPower = 12;
 
int samplingTime = 280;
int deltaTime = 40;
int sleepTime = 9680;
 
float voMeasured = 0;
float calcVoltage = 0;
float dustDensity = 0;
 
const char *ssid = "Lots of Security";  
const char *password = "Mercedes19";
 
//Web/Server address to read/write from 
const char *host = "http://dustmo.com/api";   //your IP/web server address

void setup() {
  delay(1000);
  Serial.begin(115200);
  WiFi.mode(WIFI_OFF);        //Prevents reconnection issue (taking too long to connect)
  delay(1000);
  WiFi.mode(WIFI_STA);        //This line hides the viewing of ESP as wifi hotspot
  
  WiFi.begin(ssid, password);     //Connect to your WiFi router
  Serial.println("");
 
  Serial.print("Connecting");
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
 
  //If connection successful show IP address in serial monitor
  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to your ESP
}
 
void loop() {
  //Declare object of class HTTPClient
  HTTPClient http;

  //Prepare data

 
  delay(1000);

  String postData;

    voMeasured = analogRead(measurePin); // read the dust value
    calcVoltage = voMeasured * (3.3 / 1024);
    dustDensity = 0.17 * calcVoltage - 0.1;

  Serial.print("Raw Signal Value (0-1023): ");
  Serial.println(voMeasured);
 
  Serial.print(" - Voltage: ");
  Serial.println(calcVoltage);
 
  Serial.print(" - Dust Density: ");
  Serial.println(dustDensity);
 
  //prepare request
  postData = "&voMeasured=" + String(voMeasured) + "&calcVoltage=" + calcVoltage + "&dustDensity=" + dustDensity;
  http.begin(host);
  http.addHeader("Content-Type", "application/x-www-form-urlencoded");
  int httpCode = http.POST(postData);
  String payload = http.getString();
 
  Serial.println(httpCode);
  Serial.println(payload);
  http.end();
  delay(5000);
}
