package com.example.chatbotspring.data.repository;

import com.example.chatbotspring.data.entities.Disease;
import org.springframework.data.jpa.repository.JpaRepository;

public interface DiseaseRepository extends JpaRepository<Disease, Long> {
    Disease getDiseaseByDiseaseName(String diseaseName);
}