using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class flaskAnim : MonoBehaviour
{
    public Vector3 targetPosition;
    public float smoothTime = 0.5f; 
    public float speed = 10;
    Vector3 velocity; 
    //float degreesPerSecond = 90;
    // Start is called before the first frame update
    void Start()
    {
       
    } 

    // Update is called once per frame
    void Update()
    {
         transform.position = Vector3.SmoothDamp(transform.position, targetPosition, ref velocity, smoothTime, speed);
         //transform.Rotate(new Vector3(0, 0, degreesPerSecond) * Time.deltaTime);
    }
}
